<?php

use Cubitworx\Laravel\Countries\Model;
use Illuminate\Database\Migrations\Migration;

class SeedCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		DB::table('countries')->truncate();

		Model\Country::insert([
			['iso_3166_1'=>'AD', 'name'=>'Andorra', 'active'=>0],
			['iso_3166_1'=>'AE', 'name'=>'United Arab Emirates', 'active'=>0],
			['iso_3166_1'=>'AF', 'name'=>'Afghanistan', 'active'=>0],
			['iso_3166_1'=>'AG', 'name'=>'Antigua and Barbuda', 'active'=>0],
			['iso_3166_1'=>'AI', 'name'=>'Anguilla', 'active'=>0],
			['iso_3166_1'=>'AL', 'name'=>'Albania', 'active'=>0],
			['iso_3166_1'=>'AM', 'name'=>'Armenia', 'active'=>0],
			['iso_3166_1'=>'AN', 'name'=>'Netherlands Antilles', 'active'=>0],
			['iso_3166_1'=>'AO', 'name'=>'Angola', 'active'=>0],
			['iso_3166_1'=>'AQ', 'name'=>'Antarctica', 'active'=>0],
			['iso_3166_1'=>'AR', 'name'=>'Argentina', 'active'=>0],
			['iso_3166_1'=>'AS', 'name'=>'American Samoa', 'active'=>0],
			['iso_3166_1'=>'AT', 'name'=>'Austria', 'active'=>0],
			['iso_3166_1'=>'AU', 'name'=>'Australia', 'active'=>0],
			['iso_3166_1'=>'AW', 'name'=>'Aruba', 'active'=>0],
			['iso_3166_1'=>'AX', 'name'=>'Aland Islands', 'active'=>0],
			['iso_3166_1'=>'AZ', 'name'=>'Azerbaijan', 'active'=>0],
			['iso_3166_1'=>'BA', 'name'=>'Bosnia and Herzegovina', 'active'=>0],
			['iso_3166_1'=>'BB', 'name'=>'Barbados', 'active'=>0],
			['iso_3166_1'=>'BD', 'name'=>'Bangladesh', 'active'=>0],
			['iso_3166_1'=>'BE', 'name'=>'Belgium', 'active'=>0],
			['iso_3166_1'=>'BF', 'name'=>'Burkina Faso', 'active'=>0],
			['iso_3166_1'=>'BG', 'name'=>'Bulgaria', 'active'=>0],
			['iso_3166_1'=>'BH', 'name'=>'Bahrain', 'active'=>0],
			['iso_3166_1'=>'BI', 'name'=>'Burundi', 'active'=>0],
			['iso_3166_1'=>'BJ', 'name'=>'Benin', 'active'=>0],
			['iso_3166_1'=>'BL', 'name'=>'Saint Barthélemy', 'active'=>0],
			['iso_3166_1'=>'BM', 'name'=>'Bermuda', 'active'=>0],
			['iso_3166_1'=>'BN', 'name'=>'Brunei', 'active'=>0],
			['iso_3166_1'=>'BO', 'name'=>'Bolivia', 'active'=>0],
			['iso_3166_1'=>'BQ', 'name'=>'Bonaire, Saint Eustatius and Saba ', 'active'=>0],
			['iso_3166_1'=>'BR', 'name'=>'Brazil', 'active'=>0],
			['iso_3166_1'=>'BS', 'name'=>'Bahamas', 'active'=>0],
			['iso_3166_1'=>'BT', 'name'=>'Bhutan', 'active'=>0],
			['iso_3166_1'=>'BV', 'name'=>'Bouvet Island', 'active'=>0],
			['iso_3166_1'=>'BW', 'name'=>'Botswana', 'active'=>0],
			['iso_3166_1'=>'BY', 'name'=>'Belarus', 'active'=>0],
			['iso_3166_1'=>'BZ', 'name'=>'Belize', 'active'=>0],
			['iso_3166_1'=>'CA', 'name'=>'Canada', 'active'=>0],
			['iso_3166_1'=>'CC', 'name'=>'Cocos Islands', 'active'=>0],
			['iso_3166_1'=>'CD', 'name'=>'Democratic Republic of the Congo', 'active'=>0],
			['iso_3166_1'=>'CF', 'name'=>'Central African Republic', 'active'=>0],
			['iso_3166_1'=>'CG', 'name'=>'Republic of the Congo', 'active'=>0],
			['iso_3166_1'=>'CH', 'name'=>'Switzerland', 'active'=>0],
			['iso_3166_1'=>'CI', 'name'=>'Ivory Coast', 'active'=>0],
			['iso_3166_1'=>'CK', 'name'=>'Cook Islands', 'active'=>0],
			['iso_3166_1'=>'CL', 'name'=>'Chile', 'active'=>0],
			['iso_3166_1'=>'CM', 'name'=>'Cameroon', 'active'=>0],
			['iso_3166_1'=>'CN', 'name'=>'China', 'active'=>0],
			['iso_3166_1'=>'CO', 'name'=>'Colombia', 'active'=>0],
			['iso_3166_1'=>'CR', 'name'=>'Costa Rica', 'active'=>0],
			['iso_3166_1'=>'CS', 'name'=>'Serbia and Montenegro', 'active'=>0],
			['iso_3166_1'=>'CU', 'name'=>'Cuba', 'active'=>0],
			['iso_3166_1'=>'CV', 'name'=>'Cape Verde', 'active'=>0],
			['iso_3166_1'=>'CW', 'name'=>'Curaçao', 'active'=>0],
			['iso_3166_1'=>'CX', 'name'=>'Christmas Island', 'active'=>0],
			['iso_3166_1'=>'CY', 'name'=>'Cyprus', 'active'=>0],
			['iso_3166_1'=>'CZ', 'name'=>'Czech Republic', 'active'=>0],
			['iso_3166_1'=>'DE', 'name'=>'Germany', 'active'=>0],
			['iso_3166_1'=>'DJ', 'name'=>'Djibouti', 'active'=>0],
			['iso_3166_1'=>'DK', 'name'=>'Denmark', 'active'=>0],
			['iso_3166_1'=>'DM', 'name'=>'Dominica', 'active'=>0],
			['iso_3166_1'=>'DO', 'name'=>'Dominican Republic', 'active'=>0],
			['iso_3166_1'=>'DZ', 'name'=>'Algeria', 'active'=>0],
			['iso_3166_1'=>'EC', 'name'=>'Ecuador', 'active'=>0],
			['iso_3166_1'=>'EE', 'name'=>'Estonia', 'active'=>0],
			['iso_3166_1'=>'EG', 'name'=>'Egypt', 'active'=>0],
			['iso_3166_1'=>'EH', 'name'=>'Western Sahara', 'active'=>0],
			['iso_3166_1'=>'ER', 'name'=>'Eritrea', 'active'=>0],
			['iso_3166_1'=>'ES', 'name'=>'Spain', 'active'=>0],
			['iso_3166_1'=>'ET', 'name'=>'Ethiopia', 'active'=>0],
			['iso_3166_1'=>'FI', 'name'=>'Finland', 'active'=>0],
			['iso_3166_1'=>'FJ', 'name'=>'Fiji', 'active'=>0],
			['iso_3166_1'=>'FK', 'name'=>'Falkland Islands', 'active'=>0],
			['iso_3166_1'=>'FM', 'name'=>'Micronesia', 'active'=>0],
			['iso_3166_1'=>'FO', 'name'=>'Faroe Islands', 'active'=>0],
			['iso_3166_1'=>'FR', 'name'=>'France', 'active'=>0],
			['iso_3166_1'=>'GA', 'name'=>'Gabon', 'active'=>0],
			['iso_3166_1'=>'GB', 'name'=>'United Kingdom', 'active'=>0],
			['iso_3166_1'=>'GD', 'name'=>'Grenada', 'active'=>0],
			['iso_3166_1'=>'GE', 'name'=>'Georgia', 'active'=>0],
			['iso_3166_1'=>'GF', 'name'=>'French Guiana', 'active'=>0],
			['iso_3166_1'=>'GG', 'name'=>'Guernsey', 'active'=>0],
			['iso_3166_1'=>'GH', 'name'=>'Ghana', 'active'=>0],
			['iso_3166_1'=>'GI', 'name'=>'Gibraltar', 'active'=>0],
			['iso_3166_1'=>'GL', 'name'=>'Greenland', 'active'=>0],
			['iso_3166_1'=>'GM', 'name'=>'Gambia', 'active'=>0],
			['iso_3166_1'=>'GN', 'name'=>'Guinea', 'active'=>0],
			['iso_3166_1'=>'GP', 'name'=>'Guadeloupe', 'active'=>0],
			['iso_3166_1'=>'GQ', 'name'=>'Equatorial Guinea', 'active'=>0],
			['iso_3166_1'=>'GR', 'name'=>'Greece', 'active'=>0],
			['iso_3166_1'=>'GS', 'name'=>'South Georgia and the South Sandwich Islands', 'active'=>0],
			['iso_3166_1'=>'GT', 'name'=>'Guatemala', 'active'=>0],
			['iso_3166_1'=>'GU', 'name'=>'Guam', 'active'=>0],
			['iso_3166_1'=>'GW', 'name'=>'Guinea-Bissau', 'active'=>0],
			['iso_3166_1'=>'GY', 'name'=>'Guyana', 'active'=>0],
			['iso_3166_1'=>'HK', 'name'=>'Hong Kong', 'active'=>0],
			['iso_3166_1'=>'HM', 'name'=>'Heard Island and McDonald Islands', 'active'=>0],
			['iso_3166_1'=>'HN', 'name'=>'Honduras', 'active'=>0],
			['iso_3166_1'=>'HR', 'name'=>'Croatia', 'active'=>0],
			['iso_3166_1'=>'HT', 'name'=>'Haiti', 'active'=>0],
			['iso_3166_1'=>'HU', 'name'=>'Hungary', 'active'=>0],
			['iso_3166_1'=>'ID', 'name'=>'Indonesia', 'active'=>0],
			['iso_3166_1'=>'IE', 'name'=>'Ireland', 'active'=>0],
			['iso_3166_1'=>'IL', 'name'=>'Israel', 'active'=>0],
			['iso_3166_1'=>'IM', 'name'=>'Isle of Man', 'active'=>0],
			['iso_3166_1'=>'IN', 'name'=>'India', 'active'=>0],
			['iso_3166_1'=>'IO', 'name'=>'British Indian Ocean Territory', 'active'=>0],
			['iso_3166_1'=>'IQ', 'name'=>'Iraq', 'active'=>0],
			['iso_3166_1'=>'IR', 'name'=>'Iran', 'active'=>0],
			['iso_3166_1'=>'IS', 'name'=>'Iceland', 'active'=>0],
			['iso_3166_1'=>'IT', 'name'=>'Italy', 'active'=>0],
			['iso_3166_1'=>'JE', 'name'=>'Jersey', 'active'=>0],
			['iso_3166_1'=>'JM', 'name'=>'Jamaica', 'active'=>0],
			['iso_3166_1'=>'JO', 'name'=>'Jordan', 'active'=>0],
			['iso_3166_1'=>'JP', 'name'=>'Japan', 'active'=>0],
			['iso_3166_1'=>'KE', 'name'=>'Kenya', 'active'=>0],
			['iso_3166_1'=>'KG', 'name'=>'Kyrgyzstan', 'active'=>0],
			['iso_3166_1'=>'KH', 'name'=>'Cambodia', 'active'=>0],
			['iso_3166_1'=>'KI', 'name'=>'Kiribati', 'active'=>0],
			['iso_3166_1'=>'KM', 'name'=>'Comoros', 'active'=>0],
			['iso_3166_1'=>'KN', 'name'=>'Saint Kitts and Nevis', 'active'=>0],
			['iso_3166_1'=>'KP', 'name'=>'North Korea', 'active'=>0],
			['iso_3166_1'=>'KR', 'name'=>'South Korea', 'active'=>0],
			['iso_3166_1'=>'KW', 'name'=>'Kuwait', 'active'=>0],
			['iso_3166_1'=>'KY', 'name'=>'Cayman Islands', 'active'=>0],
			['iso_3166_1'=>'KZ', 'name'=>'Kazakhstan', 'active'=>0],
			['iso_3166_1'=>'LA', 'name'=>'Laos', 'active'=>0],
			['iso_3166_1'=>'LB', 'name'=>'Lebanon', 'active'=>0],
			['iso_3166_1'=>'LC', 'name'=>'Saint Lucia', 'active'=>0],
			['iso_3166_1'=>'LI', 'name'=>'Liechtenstein', 'active'=>0],
			['iso_3166_1'=>'LK', 'name'=>'Sri Lanka', 'active'=>0],
			['iso_3166_1'=>'LR', 'name'=>'Liberia', 'active'=>0],
			['iso_3166_1'=>'LS', 'name'=>'Lesotho', 'active'=>0],
			['iso_3166_1'=>'LT', 'name'=>'Lithuania', 'active'=>0],
			['iso_3166_1'=>'LU', 'name'=>'Luxembourg', 'active'=>0],
			['iso_3166_1'=>'LV', 'name'=>'Latvia', 'active'=>0],
			['iso_3166_1'=>'LY', 'name'=>'Libya', 'active'=>0],
			['iso_3166_1'=>'MA', 'name'=>'Morocco', 'active'=>0],
			['iso_3166_1'=>'MC', 'name'=>'Monaco', 'active'=>0],
			['iso_3166_1'=>'MD', 'name'=>'Moldova', 'active'=>0],
			['iso_3166_1'=>'ME', 'name'=>'Montenegro', 'active'=>0],
			['iso_3166_1'=>'MF', 'name'=>'Saint Martin', 'active'=>0],
			['iso_3166_1'=>'MG', 'name'=>'Madagascar', 'active'=>0],
			['iso_3166_1'=>'MH', 'name'=>'Marshall Islands', 'active'=>0],
			['iso_3166_1'=>'MK', 'name'=>'Macedonia', 'active'=>0],
			['iso_3166_1'=>'ML', 'name'=>'Mali', 'active'=>0],
			['iso_3166_1'=>'MM', 'name'=>'Myanmar', 'active'=>0],
			['iso_3166_1'=>'MN', 'name'=>'Mongolia', 'active'=>0],
			['iso_3166_1'=>'MO', 'name'=>'Macao', 'active'=>0],
			['iso_3166_1'=>'MP', 'name'=>'Northern Mariana Islands', 'active'=>0],
			['iso_3166_1'=>'MQ', 'name'=>'Martinique', 'active'=>0],
			['iso_3166_1'=>'MR', 'name'=>'Mauritania', 'active'=>0],
			['iso_3166_1'=>'MS', 'name'=>'Montserrat', 'active'=>0],
			['iso_3166_1'=>'MT', 'name'=>'Malta', 'active'=>0],
			['iso_3166_1'=>'MU', 'name'=>'Mauritius', 'active'=>0],
			['iso_3166_1'=>'MV', 'name'=>'Maldives', 'active'=>0],
			['iso_3166_1'=>'MW', 'name'=>'Malawi', 'active'=>0],
			['iso_3166_1'=>'MX', 'name'=>'Mexico', 'active'=>0],
			['iso_3166_1'=>'MY', 'name'=>'Malaysia', 'active'=>0],
			['iso_3166_1'=>'MZ', 'name'=>'Mozambique', 'active'=>0],
			['iso_3166_1'=>'NA', 'name'=>'Namibia', 'active'=>0],
			['iso_3166_1'=>'NC', 'name'=>'New Caledonia', 'active'=>0],
			['iso_3166_1'=>'NE', 'name'=>'Niger', 'active'=>0],
			['iso_3166_1'=>'NF', 'name'=>'Norfolk Island', 'active'=>0],
			['iso_3166_1'=>'NG', 'name'=>'Nigeria', 'active'=>0],
			['iso_3166_1'=>'NI', 'name'=>'Nicaragua', 'active'=>0],
			['iso_3166_1'=>'NL', 'name'=>'Netherlands', 'active'=>0],
			['iso_3166_1'=>'NO', 'name'=>'Norway', 'active'=>0],
			['iso_3166_1'=>'NP', 'name'=>'Nepal', 'active'=>0],
			['iso_3166_1'=>'NR', 'name'=>'Nauru', 'active'=>0],
			['iso_3166_1'=>'NU', 'name'=>'Niue', 'active'=>0],
			['iso_3166_1'=>'NZ', 'name'=>'New Zealand', 'active'=>0],
			['iso_3166_1'=>'OM', 'name'=>'Oman', 'active'=>0],
			['iso_3166_1'=>'PA', 'name'=>'Panama', 'active'=>0],
			['iso_3166_1'=>'PE', 'name'=>'Peru', 'active'=>0],
			['iso_3166_1'=>'PF', 'name'=>'French Polynesia', 'active'=>0],
			['iso_3166_1'=>'PG', 'name'=>'Papua New Guinea', 'active'=>0],
			['iso_3166_1'=>'PH', 'name'=>'Philippines', 'active'=>0],
			['iso_3166_1'=>'PK', 'name'=>'Pakistan', 'active'=>0],
			['iso_3166_1'=>'PL', 'name'=>'Poland', 'active'=>0],
			['iso_3166_1'=>'PM', 'name'=>'Saint Pierre and Miquelon', 'active'=>0],
			['iso_3166_1'=>'PN', 'name'=>'Pitcairn', 'active'=>0],
			['iso_3166_1'=>'PR', 'name'=>'Puerto Rico', 'active'=>0],
			['iso_3166_1'=>'PS', 'name'=>'Palestinian Territory', 'active'=>0],
			['iso_3166_1'=>'PT', 'name'=>'Portugal', 'active'=>0],
			['iso_3166_1'=>'PW', 'name'=>'Palau', 'active'=>0],
			['iso_3166_1'=>'PY', 'name'=>'Paraguay', 'active'=>0],
			['iso_3166_1'=>'QA', 'name'=>'Qatar', 'active'=>0],
			['iso_3166_1'=>'RE', 'name'=>'Reunion', 'active'=>0],
			['iso_3166_1'=>'RO', 'name'=>'Romania', 'active'=>0],
			['iso_3166_1'=>'RS', 'name'=>'Serbia', 'active'=>0],
			['iso_3166_1'=>'RU', 'name'=>'Russia', 'active'=>0],
			['iso_3166_1'=>'RW', 'name'=>'Rwanda', 'active'=>0],
			['iso_3166_1'=>'SA', 'name'=>'Saudi Arabia', 'active'=>0],
			['iso_3166_1'=>'SB', 'name'=>'Solomon Islands', 'active'=>0],
			['iso_3166_1'=>'SC', 'name'=>'Seychelles', 'active'=>0],
			['iso_3166_1'=>'SD', 'name'=>'Sudan', 'active'=>0],
			['iso_3166_1'=>'SE', 'name'=>'Sweden', 'active'=>0],
			['iso_3166_1'=>'SG', 'name'=>'Singapore', 'active'=>0],
			['iso_3166_1'=>'SH', 'name'=>'Saint Helena', 'active'=>0],
			['iso_3166_1'=>'SI', 'name'=>'Slovenia', 'active'=>0],
			['iso_3166_1'=>'SJ', 'name'=>'Svalbard and Jan Mayen', 'active'=>0],
			['iso_3166_1'=>'SK', 'name'=>'Slovakia', 'active'=>0],
			['iso_3166_1'=>'SL', 'name'=>'Sierra Leone', 'active'=>0],
			['iso_3166_1'=>'SM', 'name'=>'San Marino', 'active'=>0],
			['iso_3166_1'=>'SN', 'name'=>'Senegal', 'active'=>0],
			['iso_3166_1'=>'SO', 'name'=>'Somalia', 'active'=>0],
			['iso_3166_1'=>'SR', 'name'=>'Suriname', 'active'=>0],
			['iso_3166_1'=>'SS', 'name'=>'South Sudan', 'active'=>0],
			['iso_3166_1'=>'ST', 'name'=>'Sao Tome and Principe', 'active'=>0],
			['iso_3166_1'=>'SV', 'name'=>'El Salvador', 'active'=>0],
			['iso_3166_1'=>'SX', 'name'=>'Sint Maarten', 'active'=>0],
			['iso_3166_1'=>'SY', 'name'=>'Syria', 'active'=>0],
			['iso_3166_1'=>'SZ', 'name'=>'Swaziland', 'active'=>0],
			['iso_3166_1'=>'TC', 'name'=>'Turks and Caicos Islands', 'active'=>0],
			['iso_3166_1'=>'TD', 'name'=>'Chad', 'active'=>0],
			['iso_3166_1'=>'TF', 'name'=>'French Southern Territories', 'active'=>0],
			['iso_3166_1'=>'TG', 'name'=>'Togo', 'active'=>0],
			['iso_3166_1'=>'TH', 'name'=>'Thailand', 'active'=>0],
			['iso_3166_1'=>'TJ', 'name'=>'Tajikistan', 'active'=>0],
			['iso_3166_1'=>'TK', 'name'=>'Tokelau', 'active'=>0],
			['iso_3166_1'=>'TL', 'name'=>'East Timor', 'active'=>0],
			['iso_3166_1'=>'TM', 'name'=>'Turkmenistan', 'active'=>0],
			['iso_3166_1'=>'TN', 'name'=>'Tunisia', 'active'=>0],
			['iso_3166_1'=>'TO', 'name'=>'Tonga', 'active'=>0],
			['iso_3166_1'=>'TR', 'name'=>'Turkey', 'active'=>0],
			['iso_3166_1'=>'TT', 'name'=>'Trinidad and Tobago', 'active'=>0],
			['iso_3166_1'=>'TV', 'name'=>'Tuvalu', 'active'=>0],
			['iso_3166_1'=>'TW', 'name'=>'Taiwan', 'active'=>0],
			['iso_3166_1'=>'TZ', 'name'=>'Tanzania', 'active'=>0],
			['iso_3166_1'=>'UA', 'name'=>'Ukraine', 'active'=>0],
			['iso_3166_1'=>'UG', 'name'=>'Uganda', 'active'=>0],
			['iso_3166_1'=>'UM', 'name'=>'United States Minor Outlying Islands', 'active'=>0],
			['iso_3166_1'=>'US', 'name'=>'United States', 'active'=>0],
			['iso_3166_1'=>'UY', 'name'=>'Uruguay', 'active'=>0],
			['iso_3166_1'=>'UZ', 'name'=>'Uzbekistan', 'active'=>0],
			['iso_3166_1'=>'VA', 'name'=>'Vatican', 'active'=>0],
			['iso_3166_1'=>'VC', 'name'=>'Saint Vincent and the Grenadines', 'active'=>0],
			['iso_3166_1'=>'VE', 'name'=>'Venezuela', 'active'=>0],
			['iso_3166_1'=>'VG', 'name'=>'British Virgin Islands', 'active'=>0],
			['iso_3166_1'=>'VI', 'name'=>'U.S. Virgin Islands', 'active'=>0],
			['iso_3166_1'=>'VN', 'name'=>'Vietnam', 'active'=>0],
			['iso_3166_1'=>'VU', 'name'=>'Vanuatu', 'active'=>0],
			['iso_3166_1'=>'WF', 'name'=>'Wallis and Futuna', 'active'=>0],
			['iso_3166_1'=>'WS', 'name'=>'Samoa', 'active'=>0],
			['iso_3166_1'=>'XK', 'name'=>'Kosovo', 'active'=>0],
			['iso_3166_1'=>'YE', 'name'=>'Yemen', 'active'=>0],
			['iso_3166_1'=>'YT', 'name'=>'Mayotte', 'active'=>0],
			['iso_3166_1'=>'ZA', 'name'=>'South Africa', 'active'=>0],
			['iso_3166_1'=>'ZM', 'name'=>'Zambia', 'active'=>0],
			['iso_3166_1'=>'ZW', 'name'=>'Zimbabwe', 'active'=>0],
		]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		DB::table('countries')->truncate();
	}

}
