<?php

namespace AscentCreative\UserSettings\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

    use HasFactory;

    public $fillable = ['user_id', 'setting_name', 'setting_value'];

    public $table = 'user_settings';


   /**
    * return the value(s) of a setting for a user (falls back to defaults) 
    *
    * @param mixed $name
    * @param mixed $expect_array=false
    * @param mixed $user_id=null
    * 
    * @return [type]
    */
    static function get($name, $expect_array=false, $user_id=null) {

        if (is_null($user_id)) {
            $user_id = auth()->user()->id;
        }

        // get values for this setting - both the defaults (user is null), and the user-specific ones.
        $items = Setting::where('setting_name', $name)
                        ->where(function($q) use ($user_id) {
                            $q->where('user_id', $user_id)
                                ->orWhereNull('user_id');
                        })
                        ->get();


        // if there are any user specific ones for this setting, ditch the defaults
        // if there's no user ones, then what we have are the defaults.
        if($items->contains('user_id', $user_id)) {
            // remove all the defaults
            $items = $items->reject(function($value, $key){
                return is_null($value['user_id']);
            });
        }

        $values = $items->pluck('setting_value')->toArray();

        // if expecting an array, then return the value array.
        if ($expect_array) {
            return $values;
        }

        // otherwise, convert to sensible values
        // i.e. if a string value, there's no need for an array
        // return null (if no value), just the value (if singular), or an array if multiple.
        switch(count($values)) {
            case 0:
                return null;
                break;

            case 1:
                return $values[0];
                break;
                
            default:
                return $values;
                break;
        }
        

    }

   /**
    * Convenience method to ensure a value is returned as an array - handy if you're ging to do a foreach over a setting value.
    * 
    * @param mixed $name
    * @param null $user_id
    * 
    * @return [type]
    */
    static function getArray($name, $user_id = null) {
        return Setting::get($name, true, $user_id);
    }



    static function set($name, $value, $user_id=null) {

        if (is_null($user_id)) {
            $user_id = auth()->user()->id;
        }

        // simplest to just remove and re-add all values:
        Setting::where('user_id', $user_id)
                ->where('setting_name', $name)
                ->delete();

        if(!is_array($value)) {
            $value = [$value];
        }

        foreach($value as $item) {
            Setting::create([
                'user_id'=>$user_id,
                'setting_name' => $name,
                'setting_value' => $item,
            ]);
        }


    }



}