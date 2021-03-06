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

		// sqlite limitation: insert size limited by SQLITE_MAX_SQL_LENGTH
		Model\Country::insert([
			['iso_3166_1'=>'AD', 'name'=>'Andorra', 'nationality' => 'Andorian'],
			['iso_3166_1'=>'AE', 'name'=>'United Arab Emirates', 'nationality' => 'Emirian'],
			['iso_3166_1'=>'AF', 'name'=>'Afghanistan', 'nationality' => 'Afghani'],
			['iso_3166_1'=>'AG', 'name'=>'Antigua and Barbuda', 'nationality' => 'Antiguans'],
			['iso_3166_1'=>'AI', 'name'=>'Anguilla', 'nationality' => 'Anguillan'],
			['iso_3166_1'=>'AL', 'name'=>'Albania', 'nationality' => 'Albanian'],
			['iso_3166_1'=>'AM', 'name'=>'Armenia', 'nationality' => 'Armenian'],
			['iso_3166_1'=>'AN', 'name'=>'Netherlands Antilles', 'nationality' => null],
			['iso_3166_1'=>'AO', 'name'=>'Angola', 'nationality' => 'Angolan'],
			['iso_3166_1'=>'AQ', 'name'=>'Antarctica', 'nationality' => 'Antarctic'],
			['iso_3166_1'=>'AR', 'name'=>'Argentina', 'nationality' => 'Argentine'],
			['iso_3166_1'=>'AS', 'name'=>'American Samoa', 'nationality' => null],
			['iso_3166_1'=>'AT', 'name'=>'Austria', 'nationality' => 'Austrian'],
			['iso_3166_1'=>'AU', 'name'=>'Australia', 'nationality' => 'Australian'],
			['iso_3166_1'=>'AW', 'name'=>'Aruba', 'nationality' => 'Arubian'],
			['iso_3166_1'=>'AX', 'name'=>'Aland Islands', 'nationality' => null],
			['iso_3166_1'=>'AZ', 'name'=>'Azerbaijan', 'nationality' => 'Azerbaijani'],
			['iso_3166_1'=>'BA', 'name'=>'Bosnia and Herzegovina', 'nationality' => 'Bosnian'],
			['iso_3166_1'=>'BB', 'name'=>'Barbados', 'nationality' => 'Barbadian'],
			['iso_3166_1'=>'BD', 'name'=>'Bangladesh', 'nationality' => 'Bangladeshi'],
			['iso_3166_1'=>'BE', 'name'=>'Belgium', 'nationality' => 'Belgian'],
			['iso_3166_1'=>'BF', 'name'=>'Burkina Faso', 'nationality' => 'Burkinabe'],
			['iso_3166_1'=>'BG', 'name'=>'Bulgaria', 'nationality' => 'Bulgarian'],
			['iso_3166_1'=>'BH', 'name'=>'Bahrain', 'nationality' => 'Bahrainian'],
			['iso_3166_1'=>'BI', 'name'=>'Burundi', 'nationality' => 'Burundian'],
			['iso_3166_1'=>'BJ', 'name'=>'Benin', 'nationality' => 'Beninese'],
			['iso_3166_1'=>'BL', 'name'=>'Saint Barthélemy', 'nationality' => null],
			['iso_3166_1'=>'BM', 'name'=>'Bermuda', 'nationality' => null],
			['iso_3166_1'=>'BN', 'name'=>'Brunei', 'nationality' => 'Bruneian'],
			['iso_3166_1'=>'BO', 'name'=>'Bolivia', 'nationality' => 'Bolivian'],
			['iso_3166_1'=>'BQ', 'name'=>'Bonaire, Saint Eustatius and Saba', 'nationality' => null],
			['iso_3166_1'=>'BR', 'name'=>'Brazil', 'nationality' => 'Brazilian'],
			['iso_3166_1'=>'BS', 'name'=>'Bahamas', 'nationality' => 'Bahameese'],
			['iso_3166_1'=>'BT', 'name'=>'Bhutan', 'nationality' => 'Bhutanese'],
			['iso_3166_1'=>'BV', 'name'=>'Bouvet Island', 'nationality' => null],
			['iso_3166_1'=>'BW', 'name'=>'Botswana', 'nationality' => null],
			['iso_3166_1'=>'BY', 'name'=>'Belarus', 'nationality' => 'Belarusian'],
			['iso_3166_1'=>'BZ', 'name'=>'Belize', 'nationality' => 'Belizean'],
			['iso_3166_1'=>'CA', 'name'=>'Canada', 'nationality' => 'Canadian'],
			['iso_3166_1'=>'CC', 'name'=>'Cocos Islands', 'nationality' => null],
			['iso_3166_1'=>'CD', 'name'=>'Democratic Republic of the Congo', 'nationality' => 'Congolese'],
			['iso_3166_1'=>'CF', 'name'=>'Central African Republic', 'nationality' => 'Central African'],
			['iso_3166_1'=>'CG', 'name'=>'Republic of the Congo', 'nationality' => 'Congolese'],
			['iso_3166_1'=>'CH', 'name'=>'Switzerland', 'nationality' => 'Swiss'],
			['iso_3166_1'=>'CI', 'name'=>'Ivory Coast', 'nationality' => 'Ivorian'],
			['iso_3166_1'=>'CK', 'name'=>'Cook Islands', 'nationality' => null],
			['iso_3166_1'=>'CL', 'name'=>'Chile', 'nationality' => 'Chilean'],
			['iso_3166_1'=>'CM', 'name'=>'Cameroon', 'nationality' => 'Cameroonian'],
			['iso_3166_1'=>'CN', 'name'=>'China', 'nationality' => 'Chinese'],
			['iso_3166_1'=>'CO', 'name'=>'Colombia', 'nationality' => 'Colombian'],
			['iso_3166_1'=>'CR', 'name'=>'Costa Rica', 'nationality' => 'Costa Rican'],
			['iso_3166_1'=>'CS', 'name'=>'Serbia and Montenegro', 'nationality' => 'Serbian'],
			['iso_3166_1'=>'CU', 'name'=>'Cuba', 'nationality' => 'Cuban'],
			['iso_3166_1'=>'CV', 'name'=>'Cape Verde', 'nationality' => 'Cape Verdean'],
			['iso_3166_1'=>'CW', 'name'=>'Curaçao', 'nationality' => null],
			['iso_3166_1'=>'CX', 'name'=>'Christmas Island', 'nationality' => null],
			['iso_3166_1'=>'CY', 'name'=>'Cyprus', 'nationality' => 'Cypriot'],
			['iso_3166_1'=>'CZ', 'name'=>'Czech Republic', 'nationality' => 'Czech'],
			['iso_3166_1'=>'DE', 'name'=>'Germany', 'nationality' => 'German'],
			['iso_3166_1'=>'DJ', 'name'=>'Djibouti', 'nationality' => null],
			['iso_3166_1'=>'DK', 'name'=>'Denmark', 'nationality' => 'Danish'],
			['iso_3166_1'=>'DM', 'name'=>'Dominica', 'nationality' => 'Dominican'],
			['iso_3166_1'=>'DO', 'name'=>'Dominican Republic', 'nationality' => null],
			['iso_3166_1'=>'DZ', 'name'=>'Algeria', 'nationality' => 'Algerian'],
			['iso_3166_1'=>'EC', 'name'=>'Ecuador', 'nationality' => 'Ecuadorean'],
			['iso_3166_1'=>'EE', 'name'=>'Estonia', 'nationality' => 'Estonian'],
			['iso_3166_1'=>'EG', 'name'=>'Egypt', 'nationality' => 'Egyptian'],
			['iso_3166_1'=>'EH', 'name'=>'Western Sahara', 'nationality' => null],
			['iso_3166_1'=>'ER', 'name'=>'Eritrea', 'nationality' => null],
			['iso_3166_1'=>'ES', 'name'=>'Spain', 'nationality' => 'Spanish'],
			['iso_3166_1'=>'ET', 'name'=>'Ethiopia', 'nationality' => 'Ethiopian'],
			['iso_3166_1'=>'FI', 'name'=>'Finland', 'nationality' => 'Finnish'],
			['iso_3166_1'=>'FJ', 'name'=>'Fiji', 'nationality' => 'Fijian'],
			['iso_3166_1'=>'FK', 'name'=>'Falkland Islands', 'nationality' => null],
			['iso_3166_1'=>'FM', 'name'=>'Micronesia', 'nationality' => null],
			['iso_3166_1'=>'FO', 'name'=>'Faroe Islands', 'nationality' => null],
			['iso_3166_1'=>'FR', 'name'=>'France', 'nationality' => 'French'],
			['iso_3166_1'=>'GA', 'name'=>'Gabon', 'nationality' => 'Gabonese'],
			['iso_3166_1'=>'GB', 'name'=>'United Kingdom', 'nationality' => 'British'],
			['iso_3166_1'=>'GD', 'name'=>'Grenada', 'nationality' => null],
			['iso_3166_1'=>'GE', 'name'=>'Georgia', 'nationality' => 'Georgian'],
			['iso_3166_1'=>'GF', 'name'=>'French Guiana', 'nationality' => null],
			['iso_3166_1'=>'GG', 'name'=>'Guernsey', 'nationality' => null],
			['iso_3166_1'=>'GH', 'name'=>'Ghana', 'nationality' => 'Ghanaian'],
			['iso_3166_1'=>'GI', 'name'=>'Gibraltar', 'nationality' => null],
			['iso_3166_1'=>'GL', 'name'=>'Greenland', 'nationality' => null],
			['iso_3166_1'=>'GM', 'name'=>'Gambia', 'nationality' => null],
			['iso_3166_1'=>'GN', 'name'=>'Guinea', 'nationality' => 'Guinean'],
			['iso_3166_1'=>'GP', 'name'=>'Guadeloupe', 'nationality' => null],
			['iso_3166_1'=>'GQ', 'name'=>'Equatorial Guinea', 'nationality' => null],
			['iso_3166_1'=>'GR', 'name'=>'Greece', 'nationality' => 'Greek'],
			['iso_3166_1'=>'GS', 'name'=>'South Georgia and the South Sandwich Islands', 'nationality' => null],
			['iso_3166_1'=>'GT', 'name'=>'Guatemala', 'nationality' => null],
			['iso_3166_1'=>'GU', 'name'=>'Guam', 'nationality' => null],
			['iso_3166_1'=>'GW', 'name'=>'Guinea-Bissau', 'nationality' => null],
			['iso_3166_1'=>'GY', 'name'=>'Guyana', 'nationality' => 'Guyanese'],
			['iso_3166_1'=>'HK', 'name'=>'Hong Kong', 'nationality' => 'Hongkonger'],
		]);

		Model\Country::insert([
			['iso_3166_1'=>'HM', 'name'=>'Heard Island and McDonald Islands', 'nationality' => null],
			['iso_3166_1'=>'HN', 'name'=>'Honduras', 'nationality' => null],
			['iso_3166_1'=>'HR', 'name'=>'Croatia', 'nationality' => 'Croatian'],
			['iso_3166_1'=>'HT', 'name'=>'Haiti', 'nationality' => null],
			['iso_3166_1'=>'HU', 'name'=>'Hungary', 'nationality' => 'Hungarian'],
			['iso_3166_1'=>'ID', 'name'=>'Indonesia', 'nationality' => 'Indonesian'],
			['iso_3166_1'=>'IE', 'name'=>'Ireland', 'nationality' => 'Irish'],
			['iso_3166_1'=>'IL', 'name'=>'Israel', 'nationality' => 'Israeli'],
			['iso_3166_1'=>'IM', 'name'=>'Isle of Man', 'nationality' => null],
			['iso_3166_1'=>'IN', 'name'=>'India', 'nationality' => 'Indian'],
			['iso_3166_1'=>'IO', 'name'=>'British Indian Ocean Territory', 'nationality' => null],
			['iso_3166_1'=>'IQ', 'name'=>'Iraq', 'nationality' => 'Iraqi'],
			['iso_3166_1'=>'IR', 'name'=>'Iran', 'nationality' => 'Iranian'],
			['iso_3166_1'=>'IS', 'name'=>'Iceland', 'nationality' => 'Icelander'],
			['iso_3166_1'=>'IT', 'name'=>'Italy', 'nationality' => 'Italian'],
			['iso_3166_1'=>'JE', 'name'=>'Jersey', 'nationality' => null],
			['iso_3166_1'=>'JM', 'name'=>'Jamaica', 'nationality' => 'Jamaican'],
			['iso_3166_1'=>'JO', 'name'=>'Jordan', 'nationality' => 'Jordanian'],
			['iso_3166_1'=>'JP', 'name'=>'Japan', 'nationality' => 'Japanese'],
			['iso_3166_1'=>'KE', 'name'=>'Kenya', 'nationality' => 'Kenyan'],
			['iso_3166_1'=>'KG', 'name'=>'Kyrgyzstan', 'nationality' => null],
			['iso_3166_1'=>'KH', 'name'=>'Cambodia', 'nationality' => 'Cambodian'],
			['iso_3166_1'=>'KI', 'name'=>'Kiribati', 'nationality' => null],
			['iso_3166_1'=>'KM', 'name'=>'Comoros', 'nationality' => null],
			['iso_3166_1'=>'KN', 'name'=>'Saint Kitts and Nevis', 'nationality' => null],
			['iso_3166_1'=>'KP', 'name'=>'North Korea', 'nationality' => 'North Korean'],
			['iso_3166_1'=>'KR', 'name'=>'South Korea', 'nationality' => 'South Korean'],
			['iso_3166_1'=>'KW', 'name'=>'Kuwait', 'nationality' => 'Kuwaiti'],
			['iso_3166_1'=>'KY', 'name'=>'Cayman Islands', 'nationality' => null],
			['iso_3166_1'=>'KZ', 'name'=>'Kazakhstan', 'nationality' => 'Kazakhstani'],
			['iso_3166_1'=>'LA', 'name'=>'Laos', 'nationality' => null],
			['iso_3166_1'=>'LB', 'name'=>'Lebanon', 'nationality' => 'Lebanese'],
			['iso_3166_1'=>'LC', 'name'=>'Saint Lucia', 'nationality' => null],
			['iso_3166_1'=>'LI', 'name'=>'Liechtenstein', 'nationality' => null],
			['iso_3166_1'=>'LK', 'name'=>'Sri Lanka', 'nationality' => 'Sri Lankan'],
			['iso_3166_1'=>'LR', 'name'=>'Liberia', 'nationality' => null],
			['iso_3166_1'=>'LS', 'name'=>'Lesotho', 'nationality' => null],
			['iso_3166_1'=>'LT', 'name'=>'Lithuania', 'nationality' => 'Lithuanian'],
			['iso_3166_1'=>'LU', 'name'=>'Luxembourg', 'nationality' => 'Luxembourger'],
			['iso_3166_1'=>'LV', 'name'=>'Latvia', 'nationality' => 'Latvian'],
			['iso_3166_1'=>'LY', 'name'=>'Libya', 'nationality' => 'Libyan'],
			['iso_3166_1'=>'MA', 'name'=>'Morocco', 'nationality' => 'Moroccan'],
			['iso_3166_1'=>'MC', 'name'=>'Monaco', 'nationality' => 'Monacan'],
			['iso_3166_1'=>'MD', 'name'=>'Moldova', 'nationality' => 'Moldovan'],
			['iso_3166_1'=>'ME', 'name'=>'Montenegro', 'nationality' => null],
			['iso_3166_1'=>'MF', 'name'=>'Saint Martin', 'nationality' => null],
			['iso_3166_1'=>'MG', 'name'=>'Madagascar', 'nationality' => null],
			['iso_3166_1'=>'MH', 'name'=>'Marshall Islands', 'nationality' => null],
			['iso_3166_1'=>'MK', 'name'=>'Macedonia', 'nationality' => null],
			['iso_3166_1'=>'ML', 'name'=>'Mali', 'nationality' => null],
			['iso_3166_1'=>'MM', 'name'=>'Myanmar', 'nationality' => 'Mayanmarese'],
			['iso_3166_1'=>'MN', 'name'=>'Mongolia', 'nationality' => 'Mongolian'],
			['iso_3166_1'=>'MO', 'name'=>'Macao', 'nationality' => 'Macau'],
			['iso_3166_1'=>'MP', 'name'=>'Northern Mariana Islands', 'nationality' => null],
			['iso_3166_1'=>'MQ', 'name'=>'Martinique', 'nationality' => null],
			['iso_3166_1'=>'MR', 'name'=>'Mauritania', 'nationality' => 'Mauritanian'],
			['iso_3166_1'=>'MS', 'name'=>'Montserrat', 'nationality' => null],
			['iso_3166_1'=>'MT', 'name'=>'Malta', 'nationality' => 'Maltese'],
			['iso_3166_1'=>'MU', 'name'=>'Mauritius', 'nationality' => 'Mauritian'],
			['iso_3166_1'=>'MV', 'name'=>'Maldives', 'nationality' => 'Maldivian'],
			['iso_3166_1'=>'MW', 'name'=>'Malawi', 'nationality' => 'Malawian'],
			['iso_3166_1'=>'MX', 'name'=>'Mexico', 'nationality' => 'Mexican'],
			['iso_3166_1'=>'MY', 'name'=>'Malaysia', 'nationality' => 'Malaysian'],
			['iso_3166_1'=>'MZ', 'name'=>'Mozambique', 'nationality' => 'Mozambican'],
			['iso_3166_1'=>'NA', 'name'=>'Namibia', 'nationality' => 'Namibian'],
			['iso_3166_1'=>'NC', 'name'=>'New Caledonia', 'nationality' => null],
			['iso_3166_1'=>'NE', 'name'=>'Niger', 'nationality' => null],
			['iso_3166_1'=>'NF', 'name'=>'Norfolk Island', 'nationality' => null],
			['iso_3166_1'=>'NG', 'name'=>'Nigeria', 'nationality' => 'Nigerian'],
			['iso_3166_1'=>'NI', 'name'=>'Nicaragua', 'nationality' => 'Nicaraguan'],
			['iso_3166_1'=>'NL', 'name'=>'Netherlands', 'nationality' => 'Dutch'],
			['iso_3166_1'=>'NO', 'name'=>'Norway', 'nationality' => 'Norwegian'],
			['iso_3166_1'=>'NP', 'name'=>'Nepal', 'nationality' => 'Nepalese'],
			['iso_3166_1'=>'NR', 'name'=>'Nauru', 'nationality' => null],
			['iso_3166_1'=>'NU', 'name'=>'Niue', 'nationality' => null],
			['iso_3166_1'=>'NZ', 'name'=>'New Zealand', 'nationality' => 'New Zealander'],
			['iso_3166_1'=>'OM', 'name'=>'Oman', 'nationality' => 'Omani'],
			['iso_3166_1'=>'PA', 'name'=>'Panama', 'nationality' => 'Panamanian'],
			['iso_3166_1'=>'PE', 'name'=>'Peru', 'nationality' => 'Peruvian'],
			['iso_3166_1'=>'PF', 'name'=>'French Polynesia', 'nationality' => null],
			['iso_3166_1'=>'PG', 'name'=>'Papua New Guinea', 'nationality' => null],
			['iso_3166_1'=>'PH', 'name'=>'Philippines', 'nationality' => 'Filipino'],
			['iso_3166_1'=>'PK', 'name'=>'Pakistan', 'nationality' => 'Pakistani'],
			['iso_3166_1'=>'PL', 'name'=>'Poland', 'nationality' => 'Polish'],
			['iso_3166_1'=>'PM', 'name'=>'Saint Pierre and Miquelon', 'nationality' => null],
			['iso_3166_1'=>'PN', 'name'=>'Pitcairn', 'nationality' => null],
			['iso_3166_1'=>'PR', 'name'=>'Puerto Rico', 'nationality' => 'Puerto Rican'],
			['iso_3166_1'=>'PS', 'name'=>'Palestinian Territory', 'nationality' => null],
			['iso_3166_1'=>'PT', 'name'=>'Portugal', 'nationality' => 'Portugees'],
			['iso_3166_1'=>'PW', 'name'=>'Palau', 'nationality' => null],
			['iso_3166_1'=>'PY', 'name'=>'Paraguay', 'nationality' => 'Paraguayan'],
			['iso_3166_1'=>'QA', 'name'=>'Qatar', 'nationality' => 'Qatari'],
			['iso_3166_1'=>'RE', 'name'=>'Reunion', 'nationality' => null],
			['iso_3166_1'=>'RO', 'name'=>'Romania', 'nationality' => 'Romanian'],
			['iso_3166_1'=>'RS', 'name'=>'Serbia', 'nationality' => 'Serbian'],
			['iso_3166_1'=>'RU', 'name'=>'Russia', 'nationality' => 'Russian'],
			['iso_3166_1'=>'RW', 'name'=>'Rwanda', 'nationality' => null],
			['iso_3166_1'=>'SA', 'name'=>'Saudi Arabia', 'nationality' => 'Saudi Arabian'],
			['iso_3166_1'=>'SB', 'name'=>'Solomon Islands', 'nationality' => null],
		]);

		Model\Country::insert([
			['iso_3166_1'=>'SC', 'name'=>'Seychelles', 'nationality' => 'Seychellois Creole'],
			['iso_3166_1'=>'SD', 'name'=>'Sudan', 'nationality' => 'Sudanese'],
			['iso_3166_1'=>'SE', 'name'=>'Sweden', 'nationality' => 'Swedish'],
			['iso_3166_1'=>'SG', 'name'=>'Singapore', 'nationality' => 'Singaporean'],
			['iso_3166_1'=>'SH', 'name'=>'Saint Helena', 'nationality' => null],
			['iso_3166_1'=>'SI', 'name'=>'Slovenia', 'nationality' => 'Slovenian'],
			['iso_3166_1'=>'SJ', 'name'=>'Svalbard and Jan Mayen', 'nationality' => null],
			['iso_3166_1'=>'SK', 'name'=>'Slovakia', 'nationality' => 'Slovakian'],
			['iso_3166_1'=>'SL', 'name'=>'Sierra Leone', 'nationality' => null],
			['iso_3166_1'=>'SM', 'name'=>'San Marino', 'nationality' => null],
			['iso_3166_1'=>'SN', 'name'=>'Senegal', 'nationality' => 'Senegalese'],
			['iso_3166_1'=>'SO', 'name'=>'Somalia', 'nationality' => 'Somali'],
			['iso_3166_1'=>'SR', 'name'=>'Suriname', 'nationality' => null],
			['iso_3166_1'=>'SS', 'name'=>'South Sudan', 'nationality' => null],
			['iso_3166_1'=>'ST', 'name'=>'Sao Tome and Principe', 'nationality' => null],
			['iso_3166_1'=>'SV', 'name'=>'El Salvador', 'nationality' => null],
			['iso_3166_1'=>'SX', 'name'=>'Sint Maarten', 'nationality' => null],
			['iso_3166_1'=>'SY', 'name'=>'Syria', 'nationality' => null],
			['iso_3166_1'=>'SZ', 'name'=>'Swaziland', 'nationality' => null],
			['iso_3166_1'=>'TC', 'name'=>'Turks and Caicos Islands', 'nationality' => null],
			['iso_3166_1'=>'TD', 'name'=>'Chad', 'nationality' => null],
			['iso_3166_1'=>'TF', 'name'=>'French Southern Territories', 'nationality' => null],
			['iso_3166_1'=>'TG', 'name'=>'Togo', 'nationality' => null],
			['iso_3166_1'=>'TH', 'name'=>'Thailand', 'nationality' => 'Thai'],
			['iso_3166_1'=>'TJ', 'name'=>'Tajikistan', 'nationality' => null],
			['iso_3166_1'=>'TK', 'name'=>'Tokelau', 'nationality' => null],
			['iso_3166_1'=>'TL', 'name'=>'East Timor', 'nationality' => null],
			['iso_3166_1'=>'TM', 'name'=>'Turkmenistan', 'nationality' => null],
			['iso_3166_1'=>'TN', 'name'=>'Tunisia', 'nationality' => 'Tunisian'],
			['iso_3166_1'=>'TO', 'name'=>'Tonga', 'nationality' => 'Tongan'],
			['iso_3166_1'=>'TR', 'name'=>'Turkey', 'nationality' => 'Turkish'],
			['iso_3166_1'=>'TT', 'name'=>'Trinidad and Tobago', 'nationality' => null],
			['iso_3166_1'=>'TV', 'name'=>'Tuvalu', 'nationality' => null],
			['iso_3166_1'=>'TW', 'name'=>'Taiwan', 'nationality' => 'Taiwanese'],
			['iso_3166_1'=>'TZ', 'name'=>'Tanzania', 'nationality' => 'Tanzanian'],
			['iso_3166_1'=>'UA', 'name'=>'Ukraine', 'nationality' => 'Ukrainian'],
			['iso_3166_1'=>'UG', 'name'=>'Uganda', 'nationality' => 'Ugandan'],
			['iso_3166_1'=>'UM', 'name'=>'United States Minor Outlying Islands', 'nationality' => null],
			['iso_3166_1'=>'US', 'name'=>'United States', 'nationality' => 'American'],
			['iso_3166_1'=>'UY', 'name'=>'Uruguay', 'nationality' => 'Uruguayan'],
			['iso_3166_1'=>'UZ', 'name'=>'Uzbekistan', 'nationality' => 'Uzbekistani'],
			['iso_3166_1'=>'VA', 'name'=>'Vatican', 'nationality' => null],
			['iso_3166_1'=>'VC', 'name'=>'Saint Vincent and the Grenadines', 'nationality' => null],
			['iso_3166_1'=>'VE', 'name'=>'Venezuela', 'nationality' => 'Venezuelan'],
			['iso_3166_1'=>'VG', 'name'=>'British Virgin Islands', 'nationality' => null],
			['iso_3166_1'=>'VI', 'name'=>'U.S. Virgin Islands', 'nationality' => null],
			['iso_3166_1'=>'VN', 'name'=>'Vietnam', 'nationality' => 'Vietnamese'],
			['iso_3166_1'=>'VU', 'name'=>'Vanuatu', 'nationality' => null],
			['iso_3166_1'=>'WF', 'name'=>'Wallis and Futuna', 'nationality' => null],
			['iso_3166_1'=>'WS', 'name'=>'Samoa', 'nationality' => 'Samoan'],
			['iso_3166_1'=>'XK', 'name'=>'Kosovo', 'nationality' => null],
			['iso_3166_1'=>'YE', 'name'=>'Yemen', 'nationality' => 'Yemeni'],
			['iso_3166_1'=>'YT', 'name'=>'Mayotte', 'nationality' => null],
			['iso_3166_1'=>'ZA', 'name'=>'South Africa', 'nationality' => 'South African'],
			['iso_3166_1'=>'ZM', 'name'=>'Zambia', 'nationality' => 'Zambian'],
			['iso_3166_1'=>'ZW', 'name'=>'Zimbabwe', 'nationality' => 'Zimbabwean'],
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
