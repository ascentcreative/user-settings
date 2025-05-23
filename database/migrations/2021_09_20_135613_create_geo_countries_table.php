<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeoCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geo_countries', function (Blueprint $table) {
            $table->id();
            $table->integer('_lft');
            $table->integer('_rgt');
            $table->integer('parent_id')->nullable();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('iso', 3)->nullable();
            $table->string('iso3', 3)->nullable();
            $table->float('lat');
            $table->float('lng');
            $table->timestamps();
        });



        \DB::insert(
            \DB::Raw("
        INSERT INTO `geo_countries` (`id`, `_lft`, `_rgt`, `parent_id`, `name`, `slug`, `iso`, `iso3`, `lat`, `lng`, `created_at`, `updated_at`)
VALUES
	(903, 1, 128, NULL, 'Africa', 'africa', '', '', -8.78, 34.51, NULL, '2021-09-20 15:54:54'),
	(904, 2, 43, 903, 'Eastern Africa', 'eastern-africa', '', '', 1.96, 37.30, NULL, '2021-09-20 15:54:54'),
	(905, 3, 4, 904, 'Burundi', 'burundi', 'BI', 'BDI', -3.37, 29.92, NULL, '2021-09-20 15:54:54'),
	(906, 5, 6, 904, 'Comoros', 'comoros', 'KM', 'COM', -11.65, 43.33, NULL, '2021-09-20 15:54:54'),
	(907, 7, 8, 904, 'Djibouti', 'djibouti', 'DJ', 'DJI', 11.83, 42.59, NULL, '2021-09-20 15:54:54'),
	(908, 9, 10, 904, 'Eritrea', 'eritrea', 'ER', 'ERI', 15.18, 39.78, NULL, '2021-09-20 15:54:54'),
	(909, 11, 12, 904, 'Ethiopia', 'ethiopia', 'ET', 'ETH', 9.14, 40.49, NULL, '2021-09-20 15:54:54'),
	(910, 13, 14, 904, 'Kenya', 'kenya', 'KE', 'KEN', -0.02, 37.91, NULL, '2021-09-20 15:54:54'),
	(911, 15, 16, 904, 'Madagascar', 'madagascar', 'MG', 'MDG', -18.77, 46.87, NULL, '2021-09-20 15:54:54'),
	(912, 17, 18, 904, 'Malawi', 'malawi', 'MW', 'MWI', -13.25, 34.30, NULL, '2021-09-20 15:54:54'),
	(913, 19, 20, 904, 'Mauritius', 'mauritius', 'MU', 'MUS', -20.35, 57.55, NULL, '2021-09-20 15:54:54'),
	(914, 21, 22, 904, 'Mayotte', 'mayotte', 'YT', '', -12.83, 45.17, NULL, '2021-09-20 15:54:54'),
	(915, 23, 24, 904, 'Mozambique', 'mozambique', 'MZ', 'MOZ', -18.67, 35.53, NULL, '2021-09-20 15:54:54'),
	(916, 25, 26, 904, 'Réunion', 'reunion', 'RE', 'REU', -21.12, 55.54, NULL, '2021-09-20 15:54:54'),
	(917, 27, 28, 904, 'Rwanda', 'rwanda', 'RW', 'RWA', -1.94, 29.87, NULL, '2021-09-20 15:54:54'),
	(918, 29, 30, 904, 'Seychelles', 'seychelles', 'SC', 'SYC', -4.68, 55.49, NULL, '2021-09-20 15:54:54'),
	(919, 31, 32, 904, 'Somalia', 'somalia', 'SO', 'SOM', 5.15, 46.20, NULL, '2021-09-20 15:54:54'),
	(920, 33, 34, 904, 'South Sudan', 'south-sudan', 'SS', 'SSD', 6.88, 31.31, NULL, '2021-09-20 15:54:54'),
	(921, 35, 36, 904, 'Uganda', 'uganda', 'UG', 'UGA', 1.37, 32.29, NULL, '2021-09-20 15:54:54'),
	(922, 37, 38, 904, 'Tanzania', 'tanzania', 'TZ', '', -6.37, 34.89, NULL, '2021-09-20 15:54:54'),
	(923, 39, 40, 904, 'Zambia', 'zambia', 'ZM', 'ZMB', -13.13, 27.85, NULL, '2021-09-20 15:54:54'),
	(924, 41, 42, 904, 'Zimbabwe', 'zimbabwe', 'ZW', 'ZWE', -19.02, 29.15, NULL, '2021-09-20 15:54:54'),
	(925, 44, 63, 903, 'Middle Africa', 'middle-africa', '', '', 2.32, 19.57, NULL, '2021-09-20 15:54:54'),
	(926, 45, 46, 925, 'Angola', 'angola', 'AO', 'AGO', -11.20, 17.87, NULL, '2021-09-20 15:54:54'),
	(927, 47, 48, 925, 'Cameroon', 'cameroon', 'CM', 'CMR', 7.37, 12.35, NULL, '2021-09-20 15:54:54'),
	(928, 49, 50, 925, 'Central African Republic', 'central-african-republic', 'CF', 'CAF', 6.61, 20.94, NULL, '2021-09-20 15:54:54'),
	(929, 51, 52, 925, 'Chad', 'chad', 'TD', 'TCD', 15.45, 18.73, NULL, '2021-09-20 15:54:54'),
	(930, 53, 54, 925, 'Congo', 'congo', 'CG', 'COG', -4.04, 21.76, NULL, '2021-09-20 15:54:54'),
	(931, 55, 56, 925, 'Democratic Republic of the Congo', 'democratic-republic-of-the-congo', 'CD', 'COD', -4.04, 21.76, NULL, '2021-09-20 15:54:54'),
	(932, 57, 58, 925, 'Equatorial Guinea', 'equatorial-guinea', 'GQ', 'GNQ', 1.65, 10.27, NULL, '2021-09-20 15:54:54'),
	(933, 59, 60, 925, 'Gabon', 'gabon', 'GA', 'GAB', -0.80, 11.61, NULL, '2021-09-20 15:54:54'),
	(934, 61, 62, 925, 'Sao Tome and Principe', 'sao-tome-and-principe', 'ST', 'STP', 0.19, 6.61, NULL, '2021-09-20 15:54:54'),
	(935, 64, 79, 903, 'Northern Africa', 'northern-africa', '', '', 23.42, 25.66, NULL, '2021-09-20 15:54:54'),
	(936, 65, 66, 935, 'Algeria', 'algeria', 'DZ', 'DZA', 28.03, 1.66, NULL, '2021-09-20 15:54:54'),
	(937, 67, 68, 935, 'Egypt', 'egypt', 'EG', 'EGY', 26.82, 30.80, NULL, '2021-09-20 15:54:54'),
	(938, 69, 70, 935, 'Libya', 'libya', 'LY', '', 26.34, 17.23, NULL, '2021-09-20 15:54:54'),
	(939, 71, 72, 935, 'Morocco', 'morocco', 'MA', 'MAR', 31.79, -7.09, NULL, '2021-09-20 15:54:54'),
	(940, 73, 74, 935, 'Sudan', 'sudan', 'SD', 'SDN', 12.86, 30.22, NULL, '2021-09-20 15:54:54'),
	(941, 75, 76, 935, 'Tunisia', 'tunisia', 'TN', 'TUN', 33.89, 9.54, NULL, '2021-09-20 15:54:54'),
	(942, 77, 78, 935, 'Western Sahara', 'western-sahara', 'EH', 'ESH', 24.22, -12.89, NULL, '2021-09-20 15:54:54'),
	(943, 80, 91, 903, 'Southern Africa', 'southern-africa', '', '', -24.36, 19.57, NULL, '2021-09-20 15:54:54'),
	(944, 81, 82, 943, 'Botswana', 'botswana', 'BW', 'BWA', -22.33, 24.68, NULL, '2021-09-20 15:54:54'),
	(945, 83, 84, 943, 'Lesotho', 'lesotho', 'LS', 'LSO', -29.61, 28.23, NULL, '2021-09-20 15:54:54'),
	(946, 85, 86, 943, 'Namibia', 'namibia', 'NA', 'NAM', -22.96, 18.49, NULL, '2021-09-20 15:54:54'),
	(947, 87, 88, 943, 'South Africa', 'south-africa', 'ZA', 'ZAF', -30.56, 22.94, NULL, '2021-09-20 15:54:54'),
	(948, 89, 90, 943, 'Swaziland', 'swaziland', 'SZ', 'SWZ', -26.52, 31.47, NULL, '2021-09-20 15:54:54'),
	(949, 92, 127, 903, 'Western Africa', 'western-africa', '', '', 13.53, -2.46, NULL, '2021-09-20 15:54:54'),
	(950, 93, 94, 949, 'Benin', 'benin', 'BJ', 'BEN', 9.31, 2.32, NULL, '2021-09-20 15:54:54'),
	(951, 95, 96, 949, 'Burkina Faso', 'burkina-faso', 'BF', 'BFA', 12.24, -1.56, NULL, '2021-09-20 15:54:54'),
	(952, 97, 98, 949, 'Cabo Verde', 'cabo-verde', 'CV', 'CPV', 16.54, -23.04, NULL, '2021-09-20 15:54:54'),
	(953, 99, 100, 949, 'Cote d\'Ivoire', 'cote-divoire', 'CI', 'CIV', 7.54, -5.55, NULL, '2021-09-20 15:54:54'),
	(954, 101, 102, 949, 'Gambia', 'gambia', 'GM', 'GMB', 13.44, -15.31, NULL, '2021-09-20 15:54:54'),
	(955, 103, 104, 949, 'Ghana', 'ghana', 'GH', 'GHA', 7.95, -1.02, NULL, '2021-09-20 15:54:54'),
	(956, 105, 106, 949, 'Guinea', 'guinea', 'GN', 'GIN', 9.95, -9.70, NULL, '2021-09-20 15:54:54'),
	(957, 107, 108, 949, 'Guinea-Bissau', 'guinea-bissau', 'GW', 'GNB', 11.80, -15.18, NULL, '2021-09-20 15:54:54'),
	(958, 109, 110, 949, 'Liberia', 'liberia', 'LR', 'LBR', 6.43, -9.43, NULL, '2021-09-20 15:54:54'),
	(959, 111, 112, 949, 'Mali', 'mali', 'ML', 'MLI', 17.57, -4.00, NULL, '2021-09-20 15:54:54'),
	(960, 113, 114, 949, 'Mauritania', 'mauritania', 'MR', 'MRT', 21.01, -10.94, NULL, '2021-09-20 15:54:54'),
	(961, 115, 116, 949, 'Niger', 'niger', 'NE', 'NER', 17.61, 8.08, NULL, '2021-09-20 15:54:54'),
	(962, 117, 118, 949, 'Nigeria', 'nigeria', 'NG', 'NGA', 9.08, 8.68, NULL, '2021-09-20 15:54:54'),
	(963, 119, 120, 949, 'Saint Helena', 'saint-helena', 'SH', 'SHN', -15.96, -5.71, NULL, '2021-09-20 15:54:54'),
	(964, 121, 122, 949, 'Senegal', 'senegal', 'SN', 'SEN', 14.50, -14.45, NULL, '2021-09-20 15:54:54'),
	(965, 123, 124, 949, 'Sierra Leone', 'sierra-leone', 'SL', 'SLE', 8.46, -11.78, NULL, '2021-09-20 15:54:54'),
	(966, 125, 126, 949, 'Togo', 'togo', 'TG', 'TGO', 8.62, 0.82, NULL, '2021-09-20 15:54:54'),
	(967, 129, 348, NULL, 'Americas', 'americas', '', '', 54.53, -105.26, NULL, '2021-09-20 15:54:54'),
	(968, 130, 187, 967, 'Caribbean', 'caribbean', '', '', 21.47, -78.66, NULL, '2021-09-20 15:54:54'),
	(969, 131, 132, 968, 'Anguilla', 'anguilla', 'AI', 'AIA', 18.22, -63.07, NULL, '2021-09-20 15:54:54'),
	(970, 133, 134, 968, 'Antigua and Barbuda', 'antigua-and-barbuda', 'AG', 'ATG', 17.06, -61.80, NULL, '2021-09-20 15:54:54'),
	(971, 135, 136, 968, 'Aruba', 'aruba', 'AW', 'ABW', 12.52, -69.97, NULL, '2021-09-20 15:54:54'),
	(972, 137, 138, 968, 'Bahamas', 'bahamas', 'BS', 'BHS', 25.03, -77.40, NULL, '2021-09-20 15:54:54'),
	(973, 139, 140, 968, 'Barbados', 'barbados', 'BB', 'BRB', 13.19, -59.54, NULL, '2021-09-20 15:54:54'),
	(974, 141, 142, 968, 'Bonaire, Sint Eustatius and Saba', 'bonaire-sint-eustatius-and-saba', '', '', 12.18, -68.24, NULL, '2021-09-20 15:54:54'),
	(975, 143, 144, 968, 'British Virgin Islands', 'british-virgin-islands', 'VG', 'VGB', 18.42, -64.64, NULL, '2021-09-20 15:54:54'),
	(976, 145, 146, 968, 'Cayman Islands', 'cayman-islands', 'KY', 'CYM', 19.31, -81.25, NULL, '2021-09-20 15:54:54'),
	(977, 147, 148, 968, 'Cuba', 'cuba', 'CU', 'CUB', 21.52, -77.78, NULL, '2021-09-20 15:54:54'),
	(978, 149, 150, 968, 'Curaçao', 'curacao', '', '', 12.17, -68.99, NULL, '2021-09-20 15:54:54'),
	(979, 151, 152, 968, 'Dominica', 'dominica', 'DM', 'DMA', 15.41, -61.37, NULL, '2021-09-20 15:54:54'),
	(980, 153, 154, 968, 'Dominican Republic', 'dominican-republic', 'DO', 'DOM', 18.74, -70.16, NULL, '2021-09-20 15:54:54'),
	(981, 155, 156, 968, 'Grenada', 'grenada', 'GD', 'GRD', 12.12, -61.68, NULL, '2021-09-20 15:54:54'),
	(982, 157, 158, 968, 'Guadeloupe', 'guadeloupe', 'GP', 'GLP', 16.27, -61.55, NULL, '2021-09-20 15:54:54'),
	(983, 159, 160, 968, 'Haiti', 'haiti', 'HT', 'HTI', 18.97, -72.29, NULL, '2021-09-20 15:54:54'),
	(984, 161, 162, 968, 'Jamaica', 'jamaica', 'JM', 'JAM', 18.11, -77.30, NULL, '2021-09-20 15:54:54'),
	(985, 163, 164, 968, 'Martinique', 'martinique', 'MQ', 'MTQ', 14.64, -61.02, NULL, '2021-09-20 15:54:54'),
	(986, 165, 166, 968, 'Montserrat', 'montserrat', 'MS', 'MSR', 16.74, -62.19, NULL, '2021-09-20 15:54:54'),
	(987, 167, 168, 968, 'Puerto Rico', 'puerto-rico', 'PR', 'PRI', 18.22, -66.59, NULL, '2021-09-20 15:54:54'),
	(988, 169, 170, 968, 'Saint-Barthélemy', 'saint-barthelemy', '', '', 17.90, -62.83, NULL, '2021-09-20 15:54:54'),
	(989, 171, 172, 968, 'Saint Kitts and Nevis', 'saint-kitts-and-nevis', 'KN', 'KNA', 17.36, -62.78, NULL, '2021-09-20 15:54:54'),
	(990, 173, 174, 968, 'Saint Lucia', 'saint-lucia', 'LC', 'LCA', 13.91, -60.98, NULL, '2021-09-20 15:54:54'),
	(991, 175, 176, 968, 'Saint Martin (French part)', 'saint-martin-french-part', '', '', 18.08, -63.05, NULL, '2021-09-20 15:54:54'),
	(992, 177, 178, 968, 'Saint Vincent and the Grenadines', 'saint-vincent-and-the-grenadines', 'VC', 'VCT', 12.98, -61.29, NULL, '2021-09-20 15:54:54'),
	(993, 179, 180, 968, 'Sint Maarten (Dutch part)', 'sint-maarten-dutch-part', '', '', 18.04, -63.05, NULL, '2021-09-20 15:54:54'),
	(994, 181, 182, 968, 'Trinidad and Tobago', 'trinidad-and-tobago', 'TT', 'TTO', 10.69, -61.22, NULL, '2021-09-20 15:54:54'),
	(995, 183, 184, 968, 'Turks and Caicos Islands', 'turks-and-caicos-islands', 'TC', 'TCA', 21.69, -71.80, NULL, '2021-09-20 15:54:54'),
	(996, 185, 186, 968, 'United States Virgin Islands', 'united-states-virgin-islands', 'VI', 'VIR', 18.34, -64.90, NULL, '2021-09-20 15:54:54'),
	(997, 188, 205, 967, 'Central America', 'central-america', '', '', 12.77, -85.60, NULL, '2021-09-20 15:54:54'),
	(998, 189, 190, 997, 'Belize', 'belize', 'BZ', 'BLZ', 17.19, -88.50, NULL, '2021-09-20 15:54:54'),
	(999, 191, 192, 997, 'Costa Rica', 'costa-rica', 'CR', 'CRI', 9.75, -83.75, NULL, '2021-09-20 15:54:54'),
	(1000, 193, 194, 997, 'El Salvador', 'el-salvador', 'SV', 'SLV', 13.79, -88.90, NULL, '2021-09-20 15:54:54'),
	(1001, 195, 196, 997, 'Guatemala', 'guatemala', 'GT', 'GTM', 15.78, -90.23, NULL, '2021-09-20 15:54:54'),
	(1002, 197, 198, 997, 'Honduras', 'honduras', 'HN', 'HND', 15.20, -86.24, NULL, '2021-09-20 15:54:54'),
	(1003, 199, 200, 997, 'Mexico', 'mexico', 'MX', 'MEX', 23.63, -102.55, NULL, '2021-09-20 15:54:54'),
	(1004, 201, 202, 997, 'Nicaragua', 'nicaragua', 'NI', 'NIC', 12.87, -85.21, NULL, '2021-09-20 15:54:54'),
	(1005, 203, 204, 997, 'Panama', 'panama', 'PA', 'PAN', 8.54, -80.78, NULL, '2021-09-20 15:54:54'),
	(1006, 206, 235, 967, 'South America', 'south-america', '', '', -8.78, -55.49, NULL, '2021-09-20 15:54:54'),
	(1007, 207, 208, 1006, 'Argentina', 'argentina', 'AR', 'ARG', -38.42, -63.62, NULL, '2021-09-20 15:54:54'),
	(1008, 209, 210, 1006, 'Bolivia', 'bolivia', 'BO', 'BOL', -16.29, -63.59, NULL, '2021-09-20 15:54:54'),
	(1009, 211, 212, 1006, 'Brazil', 'brazil', 'BR', 'BRA', -14.23, -51.93, NULL, '2021-09-20 15:54:54'),
	(1010, 213, 214, 1006, 'Chile', 'chile', 'CL', 'CHL', -35.68, -71.54, NULL, '2021-09-20 15:54:54'),
	(1011, 215, 216, 1006, 'Colombia', 'colombia', 'CO', 'COL', 4.57, -74.30, NULL, '2021-09-20 15:54:54'),
	(1012, 217, 218, 1006, 'Ecuador', 'ecuador', 'EC', 'ECU', -1.83, -78.18, NULL, '2021-09-20 15:54:54'),
	(1013, 219, 220, 1006, 'Falkland Islands (Malvinas)', 'falkland-islands-malvinas', 'FK', 'FLK', -51.80, -59.52, NULL, '2021-09-20 15:54:54'),
	(1014, 221, 222, 1006, 'French Guiana', 'french-guiana', 'GF', 'GUF', 3.93, -53.13, NULL, '2021-09-20 15:54:54'),
	(1015, 223, 224, 1006, 'Guyana', 'guyana', 'GY', 'GUY', 4.86, -58.93, NULL, '2021-09-20 15:54:54'),
	(1016, 225, 226, 1006, 'Paraguay', 'paraguay', 'PY', 'PRY', -23.44, -58.44, NULL, '2021-09-20 15:54:54'),
	(1017, 227, 228, 1006, 'Peru', 'peru', 'PE', 'PER', -9.19, -75.02, NULL, '2021-09-20 15:54:54'),
	(1018, 229, 230, 1006, 'Suriname', 'suriname', 'SR', 'SUR', 3.92, -56.03, NULL, '2021-09-20 15:54:54'),
	(1019, 231, 232, 1006, 'Uruguay', 'uruguay', 'UY', 'URY', -32.52, -55.77, NULL, '2021-09-20 15:54:54'),
	(1020, 233, 234, 1006, 'Venezuela (Bolivarian Republic of)', 'venezuela-bolivarian-republic-of', 'VE', 'VEN', 6.42, -66.59, NULL, '2021-09-20 15:54:54'),
	(1021, 236, 347, 967, 'North America', 'north-america', '', '', 54.53, -105.26, NULL, '2021-09-20 15:54:54'),
	(1022, 237, 238, 1021, 'Bermuda', 'bermuda', 'BM', 'BMU', 32.31, -64.75, NULL, '2021-09-20 15:54:54'),
	(1023, 239, 240, 1021, 'Canada', 'canada', 'CA', 'CAN', 56.13, -106.35, NULL, '2021-09-20 15:54:54'),
	(1024, 241, 242, 1021, 'Greenland', 'greenland', 'GL', 'GRL', 71.71, -42.60, NULL, '2021-09-20 15:54:54'),
	(1025, 243, 244, 1021, 'Saint Pierre and Miquelon', 'saint-pierre-and-miquelon', 'PM', 'SPM', 46.89, -56.32, NULL, '2021-09-20 15:54:54'),
	(1026, 245, 346, 1021, 'United States of America', 'united-states-of-america', 'US', 'USA', 37.09, -95.71, NULL, '2021-09-20 15:54:54'),
	(1027, 246, 247, 1026, 'Alabama', 'alabama', '', '', 32.32, -86.90, NULL, '2021-09-20 15:54:54'),
	(1028, 248, 249, 1026, 'Alaska', 'alaska', '', '', 64.20, -149.49, NULL, '2021-09-20 15:54:54'),
	(1029, 250, 251, 1026, 'Arizona', 'arizona', '', '', 34.05, -111.09, NULL, '2021-09-20 15:54:54'),
	(1030, 252, 253, 1026, 'Arkansas', 'arkansas', '', '', 35.20, -91.83, NULL, '2021-09-20 15:54:54'),
	(1031, 254, 255, 1026, 'California', 'california', '', '', 36.78, -119.42, NULL, '2021-09-20 15:54:54'),
	(1032, 256, 257, 1026, 'Colorado', 'colorado', '', '', 39.55, -105.78, NULL, '2021-09-20 15:54:54'),
	(1033, 258, 259, 1026, 'Connecticut', 'connecticut', '', '', 41.60, -73.09, NULL, '2021-09-20 15:54:54'),
	(1034, 260, 261, 1026, 'Delaware', 'delaware', '', '', 38.91, -75.53, NULL, '2021-09-20 15:54:54'),
	(1035, 262, 263, 1026, 'Florida', 'florida', '', '', 27.66, -81.52, NULL, '2021-09-20 15:54:54'),
	(1036, 264, 265, 1026, 'Georgia', 'georgia', '', '', 32.17, -82.90, NULL, '2021-09-20 15:54:54'),
	(1037, 266, 267, 1026, 'Hawaii', 'hawaii', '', '', 19.90, -155.58, NULL, '2021-09-20 15:54:54'),
	(1038, 268, 269, 1026, 'Idaho', 'idaho', '', '', 44.07, -114.74, NULL, '2021-09-20 15:54:54'),
	(1039, 270, 271, 1026, 'Illinois', 'illinois', '', '', 40.63, -89.40, NULL, '2021-09-20 15:54:54'),
	(1040, 272, 273, 1026, 'Indiana', 'indiana', '', '', 40.27, -86.13, NULL, '2021-09-20 15:54:54'),
	(1041, 274, 275, 1026, 'Iowa', 'iowa', '', '', 41.88, -93.10, NULL, '2021-09-20 15:54:54'),
	(1042, 276, 277, 1026, 'Kansas', 'kansas', '', '', 39.01, -98.48, NULL, '2021-09-20 15:54:54'),
	(1043, 278, 279, 1026, 'Kentucky', 'kentucky', '', '', 37.84, -84.27, NULL, '2021-09-20 15:54:54'),
	(1044, 280, 281, 1026, 'Louisiana', 'louisiana', '', '', 30.98, -91.96, NULL, '2021-09-20 15:54:54'),
	(1045, 282, 283, 1026, 'Maine', 'maine', '', '', 45.25, -69.45, NULL, '2021-09-20 15:54:54'),
	(1046, 284, 285, 1026, 'Maryland', 'maryland', '', '', 39.05, -76.64, NULL, '2021-09-20 15:54:54'),
	(1047, 286, 287, 1026, 'Massachusetts', 'massachusetts', '', '', 42.41, -71.38, NULL, '2021-09-20 15:54:54'),
	(1048, 288, 289, 1026, 'Michigan', 'michigan', '', '', 44.31, -85.60, NULL, '2021-09-20 15:54:54'),
	(1049, 290, 291, 1026, 'Minnesota', 'minnesota', '', '', 46.73, -94.69, NULL, '2021-09-20 15:54:54'),
	(1050, 292, 293, 1026, 'Mississippi', 'mississippi', '', '', 32.35, -89.40, NULL, '2021-09-20 15:54:54'),
	(1051, 294, 295, 1026, 'Missouri', 'missouri', '', '', 37.96, -91.83, NULL, '2021-09-20 15:54:54'),
	(1052, 296, 297, 1026, 'Montana', 'montana', '', '', 46.88, -110.36, NULL, '2021-09-20 15:54:54'),
	(1053, 298, 299, 1026, 'Nebraska', 'nebraska', '', '', 41.49, -99.90, NULL, '2021-09-20 15:54:54'),
	(1054, 300, 301, 1026, 'Nevada', 'nevada', '', '', 38.80, -116.42, NULL, '2021-09-20 15:54:54'),
	(1055, 302, 303, 1026, 'New Hampshire', 'new-hampshire', '', '', 43.19, -71.57, NULL, '2021-09-20 15:54:54'),
	(1056, 304, 305, 1026, 'New Jersey', 'new-jersey', '', '', 40.06, -74.41, NULL, '2021-09-20 15:54:54'),
	(1057, 306, 307, 1026, 'New Mexico', 'new-mexico', '', '', 34.52, -105.87, NULL, '2021-09-20 15:54:54'),
	(1058, 308, 309, 1026, 'New York', 'new-york', '', '', 40.71, -74.01, NULL, '2021-09-20 15:54:54'),
	(1059, 310, 311, 1026, 'North Carolina', 'north-carolina', '', '', 35.76, -79.02, NULL, '2021-09-20 15:54:54'),
	(1060, 312, 313, 1026, 'North Dakota', 'north-dakota', '', '', 47.55, -101.00, NULL, '2021-09-20 15:54:54'),
	(1061, 314, 315, 1026, 'Ohio', 'ohio', '', '', 40.42, -82.91, NULL, '2021-09-20 15:54:54'),
	(1062, 316, 317, 1026, 'Oklahoma', 'oklahoma', '', '', 35.01, -97.09, NULL, '2021-09-20 15:54:54'),
	(1063, 318, 319, 1026, 'Oregon', 'oregon', '', '', 43.80, -120.55, NULL, '2021-09-20 15:54:54'),
	(1064, 320, 321, 1026, 'Pennsylvania', 'pennsylvania', '', '', 41.20, -77.19, NULL, '2021-09-20 15:54:54'),
	(1065, 322, 323, 1026, 'Rhode Island', 'rhode-island', '', '', 41.58, -71.48, NULL, '2021-09-20 15:54:54'),
	(1066, 324, 325, 1026, 'South Carolina', 'south-carolina', '', '', 33.84, -81.16, NULL, '2021-09-20 15:54:54'),
	(1067, 326, 327, 1026, 'South Dakota', 'south-dakota', '', '', 43.97, -99.90, NULL, '2021-09-20 15:54:54'),
	(1068, 328, 329, 1026, 'Tennessee', 'tennessee', '', '', 35.52, -86.58, NULL, '2021-09-20 15:54:54'),
	(1069, 330, 331, 1026, 'Texas', 'texas', '', '', 31.97, -99.90, NULL, '2021-09-20 15:54:54'),
	(1070, 332, 333, 1026, 'Utah', 'utah', '', '', 39.32, -111.09, NULL, '2021-09-20 15:54:54'),
	(1071, 334, 335, 1026, 'Vermont', 'vermont', '', '', 44.56, -72.58, NULL, '2021-09-20 15:54:54'),
	(1072, 336, 337, 1026, 'Virginia', 'virginia', '', '', 37.43, -78.66, NULL, '2021-09-20 15:54:54'),
	(1073, 338, 339, 1026, 'Washington', 'washington', '', '', 47.75, -120.74, NULL, '2021-09-20 15:54:54'),
	(1074, 340, 341, 1026, 'West Virginia', 'west-virginia', '', '', 38.60, -80.45, NULL, '2021-09-20 15:54:54'),
	(1075, 342, 343, 1026, 'Wisconsin', 'wisconsin', '', '', 43.78, -88.79, NULL, '2021-09-20 15:54:54'),
	(1076, 344, 345, 1026, 'Wyoming', 'wyoming', '', '', 43.08, -107.29, NULL, '2021-09-20 15:54:54'),
	(1077, 349, 462, NULL, 'Asia', 'asia', '', '', 34.05, 100.62, NULL, '2021-09-20 15:54:54'),
	(1078, 350, 361, 1077, 'Central Asia', 'central-asia', '', '', 45.45, 68.83, NULL, '2021-09-20 15:54:54'),
	(1079, 351, 352, 1078, 'Kazakhstan', 'kazakhstan', 'KZ', 'KAZ', 48.02, 66.92, NULL, '2021-09-20 15:54:54'),
	(1080, 353, 354, 1078, 'Kyrgyzstan', 'kyrgyzstan', 'KG', 'KGZ', 41.20, 74.77, NULL, '2021-09-20 15:54:54'),
	(1081, 355, 356, 1078, 'Tajikistan', 'tajikistan', 'TJ', 'TJK', 38.86, 71.28, NULL, '2021-09-20 15:54:54'),
	(1082, 357, 358, 1078, 'Turkmenistan', 'turkmenistan', 'TM', 'TKM', 38.97, 59.56, NULL, '2021-09-20 15:54:54'),
	(1083, 359, 360, 1078, 'Uzbekistan', 'uzbekistan', 'UZ', 'UZB', 41.38, 64.59, NULL, '2021-09-20 15:54:54'),
	(1084, 362, 379, 1077, 'Eastern Asia', 'eastern-asia', '', '', 38.79, 106.53, NULL, '2021-09-20 15:54:54'),
	(1085, 363, 364, 1084, 'China', 'china', 'CN', 'CHN', 35.86, 104.20, NULL, '2021-09-20 15:54:54'),
	(1086, 365, 366, 1084, 'China, Hong Kong Special Administrative Region', 'china-hong-kong-special-administrative-region', '', '', 22.29, 114.14, NULL, '2021-09-20 15:54:54'),
	(1087, 367, 368, 1084, 'China, Macao Special Administrative Region', 'china-macao-special-administrative-region', '', '', 22.20, 113.54, NULL, '2021-09-20 15:54:54'),
	(1088, 369, 370, 1084, 'Democratic People\'s Republic of Korea', 'democratic-peoples-republic-of-korea', 'KP', 'PRK', 40.34, 127.51, NULL, '2021-09-20 15:54:54'),
	(1089, 371, 372, 1084, 'Japan', 'japan', 'JP', 'JPN', 36.20, 138.25, NULL, '2021-09-20 15:54:54'),
	(1090, 373, 374, 1084, 'Mongolia', 'mongolia', 'MN', 'MNG', 46.86, 103.85, NULL, '2021-09-20 15:54:54'),
	(1091, 375, 376, 1084, 'Republic of Korea', 'republic-of-korea', 'KR', 'KOR', 35.91, 127.77, NULL, '2021-09-20 15:54:54'),
	(1092, 377, 378, 1084, 'Taiwan', 'taiwan', 'TW', 'TWN', 23.70, 120.96, NULL, '2021-09-20 15:54:54'),
	(1093, 380, 399, 1077, 'Southern Asia', 'southern-asia', '', '', 25.04, 76.46, NULL, '2021-09-20 15:54:54'),
	(1094, 381, 382, 1093, 'Afghanistan', 'afghanistan', 'AF', 'AFG', 33.94, 67.71, NULL, '2021-09-20 15:54:54'),
	(1095, 383, 384, 1093, 'Bangladesh', 'bangladesh', 'BD', 'BGD', 23.68, 90.36, NULL, '2021-09-20 15:54:54'),
	(1096, 385, 386, 1093, 'Bhutan', 'bhutan', 'BT', 'BTN', 27.51, 90.43, NULL, '2021-09-20 15:54:54'),
	(1097, 387, 388, 1093, 'India', 'india', 'IN', 'IND', 20.59, 78.96, NULL, '2021-09-20 15:54:54'),
	(1098, 389, 390, 1093, 'Iran (Islamic Republic of)', 'iran-islamic-republic-of', 'IR', '', 32.43, 53.69, NULL, '2021-09-20 15:54:54'),
	(1099, 391, 392, 1093, 'Maldives', 'maldives', 'MV', 'MDV', 3.20, 73.22, NULL, '2021-09-20 15:54:54'),
	(1100, 393, 394, 1093, 'Nepal', 'nepal', 'NP', 'NPL', 28.39, 84.12, NULL, '2021-09-20 15:54:54'),
	(1101, 395, 396, 1093, 'Pakistan', 'pakistan', 'PK', 'PAK', 30.38, 69.35, NULL, '2021-09-20 15:54:54'),
	(1102, 397, 398, 1093, 'Sri Lanka', 'sri-lanka', 'LK', 'LKA', 7.87, 80.77, NULL, '2021-09-20 15:54:54'),
	(1103, 400, 423, 1077, 'South-Eastern Asia', 'south-eastern-asia', '', '', -2.22, 115.66, NULL, '2021-09-20 15:54:54'),
	(1104, 401, 402, 1103, 'Brunei Darussalam', 'brunei-darussalam', 'BN', 'BRN', 4.54, 114.73, NULL, '2021-09-20 15:54:54'),
	(1105, 403, 404, 1103, 'Cambodia', 'cambodia', 'KH', 'KHM', 12.57, 104.99, NULL, '2021-09-20 15:54:54'),
	(1106, 405, 406, 1103, 'Indonesia', 'indonesia', 'ID', 'IDN', -0.79, 113.92, NULL, '2021-09-20 15:54:54'),
	(1107, 407, 408, 1103, 'Lao People\'s Democratic Republic', 'lao-peoples-democratic-republic', 'LA', 'LAO', 19.86, 102.50, NULL, '2021-09-20 15:54:54'),
	(1108, 409, 410, 1103, 'Malaysia', 'malaysia', 'MY', 'MYS', 4.21, 101.98, NULL, '2021-09-20 15:54:54'),
	(1109, 411, 412, 1103, 'Myanmar', 'myanmar', 'MM', 'MMR', 21.92, 95.96, NULL, '2021-09-20 15:54:54'),
	(1110, 413, 414, 1103, 'Philippines', 'philippines', 'PH', 'PHL', 12.88, 121.77, NULL, '2021-09-20 15:54:54'),
	(1111, 415, 416, 1103, 'Singapore', 'singapore', 'SG', 'SGP', 1.35, 103.82, NULL, '2021-09-20 15:54:54'),
	(1112, 417, 418, 1103, 'Thailand', 'thailand', 'TH', 'THA', 15.87, 100.99, NULL, '2021-09-20 15:54:54'),
	(1113, 419, 420, 1103, 'Timor-Leste', 'timor-leste', 'TL', '', -8.87, 125.73, NULL, '2021-09-20 15:54:54'),
	(1114, 421, 422, 1103, 'Viet Nam', 'viet-nam', 'VN', 'VNM', 14.06, 108.28, NULL, '2021-09-20 15:54:54'),
	(1115, 424, 461, 1077, 'Western Asia (Middle East)', 'western-asia-middle-east', '', '', 26.38, 46.96, NULL, '2021-09-20 15:54:54'),
	(1116, 425, 426, 1115, 'Armenia', 'armenia', 'AM', 'ARM', 40.07, 45.04, NULL, '2021-09-20 15:54:54'),
	(1117, 427, 428, 1115, 'Azerbaijan', 'azerbaijan', 'AZ', 'AZE', 40.14, 47.58, NULL, '2021-09-20 15:54:54'),
	(1118, 429, 430, 1115, 'Bahrain', 'bahrain', 'BH', 'BHR', 26.07, 50.56, NULL, '2021-09-20 15:54:54'),
	(1119, 431, 432, 1115, 'Cyprus', 'cyprus', 'CY', 'CYP', 35.13, 33.43, NULL, '2021-09-20 15:54:54'),
	(1120, 433, 434, 1115, 'Georgia', 'georgia-1', 'GE', 'GEO', 32.17, -82.90, NULL, '2021-09-20 15:54:54'),
	(1121, 435, 436, 1115, 'Iraq', 'iraq', 'IQ', 'IRQ', 33.22, 43.68, NULL, '2021-09-20 15:54:54'),
	(1122, 437, 438, 1115, 'Israel', 'israel', 'IL', 'ISR', 31.05, 34.85, NULL, '2021-09-20 15:54:54'),
	(1123, 439, 440, 1115, 'Jordan', 'jordan', 'JO', 'JOR', 30.59, 36.24, NULL, '2021-09-20 15:54:54'),
	(1124, 441, 442, 1115, 'Kuwait', 'kuwait', 'KW', 'KWT', 29.31, 47.48, NULL, '2021-09-20 15:54:54'),
	(1125, 443, 444, 1115, 'Lebanon', 'lebanon', 'LB', 'LBN', 33.85, 35.86, NULL, '2021-09-20 15:54:54'),
	(1126, 445, 446, 1115, 'Oman', 'oman', 'OM', 'OMN', 21.47, 55.98, NULL, '2021-09-20 15:54:54'),
	(1127, 447, 448, 1115, 'Qatar', 'qatar', 'QA', 'QAT', 25.35, 51.18, NULL, '2021-09-20 15:54:54'),
	(1128, 449, 450, 1115, 'Saudi Arabia', 'saudi-arabia', 'SA', 'SAU', 23.89, 45.08, NULL, '2021-09-20 15:54:54'),
	(1129, 451, 452, 1115, 'State of Palestine', 'state-of-palestine', '', '', 31.95, 35.23, NULL, '2021-09-20 15:54:54'),
	(1130, 453, 454, 1115, 'Syrian Arab Republic', 'syrian-arab-republic', 'SY', 'SYR', 34.80, 39.00, NULL, '2021-09-20 15:54:54'),
	(1131, 455, 456, 1115, 'Turkey', 'turkey', 'TR', 'TUR', 38.96, 35.24, NULL, '2021-09-20 15:54:54'),
	(1132, 457, 458, 1115, 'United Arab Emirates', 'united-arab-emirates', 'AE', 'ARE', 23.42, 53.85, NULL, '2021-09-20 15:54:54'),
	(1133, 459, 460, 1115, 'Yemen', 'yemen', 'YE', 'YEM', 15.55, 48.52, NULL, '2021-09-20 15:54:54'),
	(1134, 463, 580, NULL, 'Europe', 'europe', '', '', 54.53, 15.26, NULL, '2021-09-20 15:54:54'),
	(1135, 464, 485, 1134, 'Eastern Europe', 'eastern-europe', '', '', 52.01, 37.96, NULL, '2021-09-20 15:54:54'),
	(1136, 465, 466, 1135, 'Belarus', 'belarus', 'BY', 'BLR', 53.71, 27.95, NULL, '2021-09-20 15:54:54'),
	(1137, 467, 468, 1135, 'Bulgaria', 'bulgaria', 'BG', 'BGR', 42.73, 25.49, NULL, '2021-09-20 15:54:54'),
	(1138, 469, 470, 1135, 'Czechia', 'czechia', 'CZ', '', 49.82, 15.47, NULL, '2021-09-20 15:54:54'),
	(1139, 471, 472, 1135, 'Hungary', 'hungary', 'HU', 'HUN', 47.16, 19.50, NULL, '2021-09-20 15:54:54'),
	(1140, 473, 474, 1135, 'Poland', 'poland', 'PL', 'POL', 51.92, 19.15, NULL, '2021-09-20 15:54:54'),
	(1141, 475, 476, 1135, 'Republic of Moldova', 'republic-of-moldova', 'MD', 'MDA', 47.41, 28.37, NULL, '2021-09-20 15:54:54'),
	(1142, 477, 478, 1135, 'Romania', 'romania', 'RO', 'ROM', 45.94, 24.97, NULL, '2021-09-20 15:54:54'),
	(1143, 479, 480, 1135, 'Russian Federation', 'russian-federation', 'RU', 'RUS', 61.52, 105.32, NULL, '2021-09-20 15:54:54'),
	(1144, 481, 482, 1135, 'Slovakia', 'slovakia', 'SK', 'SVK', 48.67, 19.70, NULL, '2021-09-20 15:54:54'),
	(1145, 483, 484, 1135, 'Ukraine', 'ukraine', 'UA', 'UKR', 48.38, 31.17, NULL, '2021-09-20 15:54:54'),
	(1146, 486, 515, 1134, 'Northern Europe', 'northern-europe', '', '', 62.28, 12.34, NULL, '2021-09-20 15:54:54'),
	(1147, 487, 488, 1146, 'Åland Islands', 'aland-islands', '', '', 60.18, 19.92, NULL, '2021-09-20 15:54:54'),
	(1148, 489, 490, 1146, 'Channel Islands', 'channel-islands', '', '', 49.46, -2.94, NULL, '2021-09-20 15:54:54'),
	(1149, 491, 492, 1146, 'Denmark', 'denmark', 'DK', 'DNK', 56.26, 9.50, NULL, '2021-09-20 15:54:54'),
	(1150, 493, 494, 1146, 'Estonia', 'estonia', 'EE', 'EST', 58.60, 25.01, NULL, '2021-09-20 15:54:54'),
	(1151, 495, 496, 1146, 'Faeroe Islands', 'faeroe-islands', 'FO', 'FRO', 61.89, -6.91, NULL, '2021-09-20 15:54:54'),
	(1152, 497, 498, 1146, 'Finland', 'finland', 'FI', 'FIN', 61.92, 25.75, NULL, '2021-09-20 15:54:54'),
	(1153, 499, 500, 1146, 'Iceland', 'iceland', 'IS', 'ISL', 64.96, -19.02, NULL, '2021-09-20 15:54:54'),
	(1154, 501, 502, 1146, 'Ireland', 'ireland', 'IE', 'IRL', 53.14, -7.69, NULL, '2021-09-20 15:54:54'),
	(1155, 503, 504, 1146, 'Latvia', 'latvia', 'LV', 'LVA', 56.88, 24.60, NULL, '2021-09-20 15:54:54'),
	(1156, 505, 506, 1146, 'Lithuania', 'lithuania', 'LT', 'LTU', 55.17, 23.88, NULL, '2021-09-20 15:54:54'),
	(1157, 507, 508, 1146, 'Norway', 'norway', 'NO', 'NOR', 60.47, 8.47, NULL, '2021-09-20 15:54:54'),
	(1158, 509, 510, 1146, 'Sark', 'sark', '', '', 49.43, -2.37, NULL, '2021-09-20 15:54:54'),
	(1159, 511, 512, 1146, 'Svalbard and Jan Mayen Islands', 'svalbard-and-jan-mayen-islands', 'SJ', '', 77.55, 23.67, NULL, '2021-09-20 15:54:54'),
	(1160, 513, 514, 1146, 'Sweden', 'sweden', 'SE', 'SWE', 60.13, 18.64, NULL, '2021-09-20 15:54:54'),
	(1161, 516, 549, 1134, 'Southern Europe', 'southern-europe', '', '', 41.27, -1.21, NULL, '2021-09-20 15:54:54'),
	(1162, 517, 518, 1161, 'Albania', 'albania', 'AL', 'ALB', 41.15, 20.17, NULL, '2021-09-20 15:54:54'),
	(1163, 519, 520, 1161, 'Andorra', 'andorra', 'AD', 'AND', 42.51, 1.52, NULL, '2021-09-20 15:54:54'),
	(1164, 521, 522, 1161, 'Bosnia and Herzegovina', 'bosnia-and-herzegovina', 'BA', 'BIH', 43.92, 17.68, NULL, '2021-09-20 15:54:54'),
	(1165, 523, 524, 1161, 'Croatia', 'croatia', 'HR', 'HRV', 45.10, 15.20, NULL, '2021-09-20 15:54:54'),
	(1166, 525, 526, 1161, 'Gibraltar', 'gibraltar', 'GI', 'GIB', 36.14, -5.35, NULL, '2021-09-20 15:54:54'),
	(1167, 527, 528, 1161, 'Greece', 'greece', 'GR', 'GRC', 39.07, 21.82, NULL, '2021-09-20 15:54:54'),
	(1168, 529, 530, 1161, 'Holy See', 'holy-see', '', '', 30.03, -95.81, NULL, '2021-09-20 15:54:54'),
	(1169, 531, 532, 1161, 'Italy', 'italy', 'IT', 'ITA', 41.87, 12.57, NULL, '2021-09-20 15:54:54'),
	(1170, 533, 534, 1161, 'Malta', 'malta', 'MT', 'MLT', 35.94, 14.38, NULL, '2021-09-20 15:54:54'),
	(1171, 535, 536, 1161, 'Montenegro', 'montenegro', 'ME', '', 42.71, 19.37, NULL, '2021-09-20 15:54:54'),
	(1172, 537, 538, 1161, 'Portugal', 'portugal', 'PT', 'PRT', 39.40, -8.22, NULL, '2021-09-20 15:54:54'),
	(1173, 539, 540, 1161, 'San Marino', 'san-marino', 'SM', 'SMR', 43.94, 12.46, NULL, '2021-09-20 15:54:54'),
	(1174, 541, 542, 1161, 'Serbia', 'serbia', 'CS', '', 44.02, 21.01, NULL, '2021-09-20 15:54:54'),
	(1175, 543, 544, 1161, 'Slovenia', 'slovenia', 'SI', 'SVN', 46.15, 15.00, NULL, '2021-09-20 15:54:54'),
	(1176, 545, 546, 1161, 'Spain', 'spain', 'ES', 'ESP', 40.46, -3.75, NULL, '2021-09-20 15:54:54'),
	(1177, 547, 548, 1161, 'The former Yugoslav Republic of Macedonia', 'the-former-yugoslav-republic-of-macedonia', 'MK', '', 41.61, 21.75, NULL, '2021-09-20 15:54:54'),
	(1178, 550, 579, 1134, 'Western Europe', 'western-europe', '', '', 46.20, 1.26, NULL, '2021-09-20 15:54:54'),
	(1179, 551, 552, 1178, 'Austria', 'austria', 'AT', 'AUT', 47.52, 14.55, NULL, '2021-09-20 15:54:54'),
	(1180, 553, 554, 1178, 'Belgium', 'belgium', 'BE', 'BEL', 50.50, 4.47, NULL, '2021-09-20 15:54:54'),
	(1181, 555, 556, 1178, 'France', 'france', 'FR', 'FRA', 46.23, 2.21, NULL, '2021-09-20 15:54:54'),
	(1182, 557, 558, 1178, 'Germany', 'germany', 'DE', 'DEU', 51.17, 10.45, NULL, '2021-09-20 15:54:54'),
	(1183, 559, 560, 1178, 'Liechtenstein', 'liechtenstein', 'LI', 'LIE', 47.17, 9.56, NULL, '2021-09-20 15:54:54'),
	(1184, 561, 562, 1178, 'Luxembourg', 'luxembourg', 'LU', 'LUX', 49.82, 6.13, NULL, '2021-09-20 15:54:54'),
	(1185, 563, 564, 1178, 'Monaco', 'monaco', 'MC', 'MCO', 43.74, 7.42, NULL, '2021-09-20 15:54:54'),
	(1186, 565, 566, 1178, 'Netherlands', 'netherlands', 'NL', 'NLD', 52.13, 5.29, NULL, '2021-09-20 15:54:54'),
	(1187, 567, 568, 1178, 'Switzerland', 'switzerland', 'CH', 'CHE', 46.82, 8.23, NULL, '2021-09-20 15:54:54'),
	(1188, 569, 578, 1178, 'United Kingdom', 'united-kingdom', 'GB', 'GBR', 55.38, -3.44, NULL, '2021-09-20 15:54:54'),
	(1189, 570, 571, 1188, 'England', 'england', '', '', 52.36, -1.17, NULL, '2021-09-20 15:54:54'),
	(1247, 572, 573, 1188, 'Northern Ireland', 'northern-ireland', '', '', 54.79, -6.49, NULL, '2021-09-20 15:54:54'),
	(1254, 574, 575, 1188, 'Scotland', 'scotland', '', '', 56.49, -4.20, NULL, '2021-09-20 15:54:55'),
	(1301, 576, 577, 1188, 'Wales', 'wales', '', '', 52.13, -3.78, NULL, '2021-09-20 15:54:55'),
	(1324, 581, 640, NULL, 'Oceania', 'oceania', '', '', -22.74, 140.02, NULL, '2021-09-20 15:54:55'),
	(1325, 582, 589, 1324, 'Australia and New Zealand', 'australia-and-new-zealand', '', '', -36.29, 162.82, NULL, '2021-09-20 15:54:55'),
	(1326, 583, 584, 1325, 'Australia', 'australia', 'AU', 'AUS', -25.27, 133.78, NULL, '2021-09-20 15:54:55'),
	(1327, 585, 586, 1325, 'New Zealand', 'new-zealand', 'NZ', 'NZL', -40.90, 174.89, NULL, '2021-09-20 15:54:55'),
	(1328, 587, 588, 1325, 'Norfolk Island', 'norfolk-island', 'NF', 'NFK', -29.04, 167.95, NULL, '2021-09-20 15:54:55'),
	(1329, 590, 601, 1324, 'Melanesia', 'melanesia', '', '', -8.19, 152.83, NULL, '2021-09-20 15:54:55'),
	(1330, 591, 592, 1329, 'Fiji', 'fiji', 'FJ', 'FJI', -17.71, 178.06, NULL, '2021-09-20 15:54:55'),
	(1331, 593, 594, 1329, 'New Caledonia', 'new-caledonia', 'NC', 'NCL', -20.90, 165.62, NULL, '2021-09-20 15:54:55'),
	(1332, 595, 596, 1329, 'Papua New Guinea', 'papua-new-guinea', 'PG', 'PNG', -6.32, 143.96, NULL, '2021-09-20 15:54:55'),
	(1333, 597, 598, 1329, 'Solomon Islands', 'solomon-islands', 'SB', 'SLB', -9.65, 160.16, NULL, '2021-09-20 15:54:55'),
	(1334, 599, 600, 1329, 'Vanuatu', 'vanuatu', 'VU', 'VUT', -15.38, 166.96, NULL, '2021-09-20 15:54:55'),
	(1335, 602, 623, 1324, 'Polynesia', 'polynesia', '', '', -16.84, -148.37, NULL, '2021-09-20 15:54:55'),
	(1336, 603, 604, 1335, 'American Samoa', 'american-samoa', 'AS', 'ASM', -14.27, -170.13, NULL, '2021-09-20 15:54:55'),
	(1337, 605, 606, 1335, 'Cook Islands', 'cook-islands', 'CK', 'COK', -21.24, -159.78, NULL, '2021-09-20 15:54:55'),
	(1338, 607, 608, 1335, 'French Polynesia', 'french-polynesia', 'PF', 'PYF', -17.68, -149.41, NULL, '2021-09-20 15:54:55'),
	(1339, 609, 610, 1335, 'Niue', 'niue', 'NU', 'NIU', -19.05, -169.87, NULL, '2021-09-20 15:54:55'),
	(1340, 611, 612, 1335, 'Pitcairn', 'pitcairn', 'PN', 'PCN', -24.38, -128.32, NULL, '2021-09-20 15:54:55'),
	(1341, 613, 614, 1335, 'Samoa', 'samoa', 'WS', 'WSM', -13.76, -172.10, NULL, '2021-09-20 15:54:55'),
	(1342, 615, 616, 1335, 'Tokelau', 'tokelau', 'TK', 'TKL', -9.20, -171.85, NULL, '2021-09-20 15:54:55'),
	(1343, 617, 618, 1335, 'Tonga', 'tonga', 'TO', 'TON', -21.18, -175.20, NULL, '2021-09-20 15:54:55'),
	(1344, 619, 620, 1335, 'Tuvalu', 'tuvalu', 'TV', 'TUV', -7.11, 177.65, NULL, '2021-09-20 15:54:55'),
	(1345, 621, 622, 1335, 'Wallis and Futuna Islands', 'wallis-and-futuna-islands', 'WF', 'WLF', -14.29, -178.12, NULL, '2021-09-20 15:54:55'),
	(1346, 624, 639, 1324, 'Micronesia', 'micronesia', '', '', 7.43, 150.55, NULL, '2021-09-20 15:54:55'),
	(1347, 625, 626, 1346, 'Guam', 'guam', 'GU', 'GUM', 13.44, 144.79, NULL, '2021-09-20 15:54:55'),
	(1348, 627, 628, 1346, 'Kiribati', 'kiribati', 'KI', 'KIR', -3.37, -168.73, NULL, '2021-09-20 15:54:55'),
	(1349, 629, 630, 1346, 'Marshall Islands', 'marshall-islands', 'MH', 'MHL', 7.13, 171.18, NULL, '2021-09-20 15:54:55'),
	(1350, 631, 632, 1346, 'Micronesia (Federated States of)', 'micronesia-federated-states-of', '', '', 7.43, 150.55, NULL, '2021-09-20 15:54:55'),
	(1351, 633, 634, 1346, 'Nauru', 'nauru', 'NR', 'NRU', -0.52, 166.93, NULL, '2021-09-20 15:54:55'),
	(1352, 635, 636, 1346, 'Northern Mariana Islands', 'northern-mariana-islands', 'MP', 'MNP', 15.10, 145.67, NULL, '2021-09-20 15:54:55'),
	(1353, 637, 638, 1346, 'Palau', 'palau', 'PW', 'PLW', 7.51, 134.58, NULL, '2021-09-20 15:54:55');"
                )
           );




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geo_countries');
    }
}
