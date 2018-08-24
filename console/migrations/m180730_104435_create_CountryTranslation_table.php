<?php

use yii\db\Migration;

/**
 * Handles the creation of table `CountryTranslation`.
 */
class m180730_104435_create_CountryTranslation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%CountryTranslation}}',
            [
                'CountryCode'=>"ENUM(
                                'AB','AD','AE','AF','AG','AI','AL','AM','AN','AO','AQ','AR','AS','AT','AU','AW','AX','AZ',
                                'BA','BB','BD','BE','BF','BG','BH','BI','BJ','BL','BM','BN','BO','BQ','BR','BS','BT','BV',
                                'BW','BY','BZ','CA','CC','CD','CF','CG','CH','CI','CK','CL','CM','CN','CO','CR','CS','CU',
                                'CV','CW','CX','CY','CZ','DE','DJ','DK','DM','DO','DZ','EC','EE','EG','EH','ER','ES','ET',
                                'FI','FJ','FK','FM','FO','FR','GA','GB','GD','GE','GF','GG','GH','GI','GL','GM','GN','GP',
                                'GQ','GR','GS','GT','GU','GW','GY','HK','HM','HN','HR','HT','HU','ID','IE','IL','IM','IN',
                                'IO','IQ','IR','IS','IT','JE','JM','JO','JP','KE','KG','KH','KI','KM','KN','KP','KR','KW',
                                'KY','KZ','LA','LB','LC','LI','LK','LR','LS','LT','LU','LV','LY','MA','MC','MD','ME','MF',
                                'MG','MH','MK','ML','MM','MN','MO','MP','MQ','MR','MS','MT','MU','MV','MW','MX','MY','MZ',
                                'NA','NC','NE','NF','NG','NI','NL','NO','NP','NR','NU','NZ','OM','OS','PA','PE','PF','PG',
                                'PH','PK','PL','PM','PN','PR','PS','PT','PW','PY','QA','RE','RO','RS','RU','RW','SA','SB',
                                'SC','SD','SE','SG','SH','SI','SJ','SK','SL','SM','SN','SO','SR','SS','ST','SV','SX','SY',
                                'SZ','TC','TD','TF','TG','TH','TJ','TK','TL','TM','TN','TO','TR','TT','TV','TW','TZ','UA',
                                'UG','UM','US','UY','UZ','VA','VC','VE','VG','VI','VN','VU','WF','WS','XK','YE','YT','ZA',
                                'ZM','ZW' ) NOT NULL DEFAULT 'RU'",

                'Language'=>"ENUM('aa','ab','ae','af','ak','am','an','ar','as','av','ay','az','ba','be','bg','bh',
                                        'bi','bm','bn','bo','br','bs','ca','ce','ch','co','cr','cs','cu','cv','cy','da',
                                        'de','dv','dz','ee','el','en','eo','es','et','eu','fa','ff','fi','fl','fj','fo','fr',
                                        'fy','ga','gd','gl','gn','gu','gv','ha','he','hi','ho','hr','ht','hu','hy','hz',
                                        'ia','id','ie','ig','ii','ik','io','is','it','iu','ja','jv','ka','kg','ki','kj',
                                        'kk','kl','km','kn','ko','kr','ks','ku','kv','kw','ky','la','lb','lg','li','ln',
                                        'lo','lt','lu','lv','mg','mh','mi','mk','ml','mn','mr','ms','mt','my','na','nb',
                                        'nd','ne','ng','nl','nn','no','nr','nv','ny','oc','oj','om','or','os','pa','pi',
                                        'pl','ps','pt','qu','rm','rn','ro','ru','rw','sa','sc','sd','se','sg','sh','si',
                                        'sk','sl','sm','sn','so','sq','sr','ss','st','su','sv','sw','ta','te','tg','th',
                                        'ti','tk','tl','tn','to','tr','ts','tt','tw','ty','ug','uk','ur','uz','ve','vi',
                                        'vo','wa','wo','xh','yi','yo','za','zh','zu')  NOT NULL DEFAULT 'en'",

                'Name' => $this->string(120)->notNull(),
                'CreatedDate' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
                'UpdatedDate' => 'TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
            ],
            $tableOptions
        );

        $this->addPrimaryKey('PrimaryKey','{{%CountryTranslation}}',['CountryCode','Language']);

        $insert=
            [
                ['AB', 'Abkhazia'],
                ['AD', 'Andorra'],
                ['AE', 'United Arab Emirates'],
                ['AF', 'Afghanistan'],
                ['AG', 'Antigua and Barbuda'],
                ['AI', 'Anguilla'],
                ['AL', 'Albania'],
                ['AM', 'Armenia'],
                ['AN', 'Netherlands Antilles'],
                ['AO', 'Angola'],
                ['AQ', 'Antarctica'],
                ['AR', 'Argentina'],
                ['AS', 'American Samoa'],
                ['AT', 'Austria'],
                ['AU', 'Australia'],
                ['AW', 'Aruba'],
                ['AX', 'Aland Islands'],
                ['AZ', 'Azerbaijan'],
                ['BA', 'Bosnia and Herzegovina'],
                ['BB', 'Barbados'],
                ['BD', 'Bangladesh'],
                ['BE', 'Belgium'],
                ['BF', 'Burkina Faso'],
                ['BG', 'Bulgaria'],
                ['BH', 'Bahrain'],
                ['BI', 'Burundi'],
                ['BJ', 'Benin'],
                ['BL', 'Saint Barthelemy'],
                ['BM', 'Bermuda'],
                ['BN', 'Brunei'],
                ['BO', 'Bolivia'],
                ['BQ', 'Bonaire, Saint Eustatius and Saba '],
                ['BR', 'Brazil'],
                ['BS', 'Bahamas'],
                ['BT', 'Bhutan'],
                ['BV', 'Bouvet Island'],
                ['BW', 'Botswana'],
                ['BY', 'Belarus'],
                ['BZ', 'Belize'],
                ['CA', 'Canada'],
                ['CC', 'Cocos Islands'],
                ['CD', 'Democratic Republic of the Congo'],
                ['CF', 'Central African Republic'],
                ['CG', 'Republic of the Congo'],
                ['CH', 'Switzerland'],
                ['CI', 'Ivory Coast'],
                ['CK', 'Cook Islands'],
                ['CL', 'Chile'],
                ['CM', 'Cameroon'],
                ['CN', 'China'],
                ['CO', 'Colombia'],
                ['CR', 'Costa Rica'],
                ['CS', 'Serbia and Montenegro'],
                ['CU', 'Cuba'],
                ['CV', 'Cape Verde'],
                ['CW', 'Curacao'],
                ['CX', 'Christmas Island'],
                ['CY', 'Cyprus'],
                ['CZ', 'Czechia'],
                ['DE', 'Germany'],
                ['DJ', 'Djibouti'],
                ['DK', 'Denmark'],
                ['DM', 'Dominica'],
                ['DO', 'Dominican Republic'],
                ['DZ', 'Algeria'],
                ['EC', 'Ecuador'],
                ['EE', 'Estonia'],
                ['EG', 'Egypt'],
                ['EH', 'Western Sahara'],
                ['ER', 'Eritrea'],
                ['ES', 'Spain'],
                ['ET', 'Ethiopia'],
                ['FI', 'Finland'],
                ['FJ', 'Fiji'],
                ['FK', 'Falkland Islands'],
                ['FM', 'Micronesia'],
                ['FO', 'Faroe Islands'],
                ['FR', 'France'],
                ['GA', 'Gabon'],
                ['GB', 'United Kingdom'],
                ['GD', 'Grenada'],
                ['GE', 'Georgia'],
                ['GF', 'French Guiana'],
                ['GG', 'Guernsey'],
                ['GH', 'Ghana'],
                ['GI', 'Gibraltar'],
                ['GL', 'Greenland'],
                ['GM', 'Gambia'],
                ['GN', 'Guinea'],
                ['GP', 'Guadeloupe'],
                ['GQ', 'Equatorial Guinea'],
                ['GR', 'Greece'],
                ['GS', 'South Georgia and the South Sandwich Islands'],
                ['GT', 'Guatemala'],
                ['GU', 'Guam'],
                ['GW', 'Guinea-Bissau'],
                ['GY', 'Guyana'],
                ['HK', 'Hong Kong'],
                ['HM', 'Heard Island and McDonald Islands'],
                ['HN', 'Honduras'],
                ['HR', 'Croatia'],
                ['HT', 'Haiti'],
                ['HU', 'Hungary'],
                ['ID', 'Indonesia'],
                ['IE', 'Ireland'],
                ['IL', 'Israel'],
                ['IM', 'Isle of Man'],
                ['IN', 'India'],
                ['IO', 'British Indian Ocean Territory'],
                ['IQ', 'Iraq'],
                ['IR', 'Iran'],
                ['IS', 'Iceland'],
                ['IT', 'Italy'],
                ['JE', 'Jersey'],
                ['JM', 'Jamaica'],
                ['JO', 'Jordan'],
                ['JP', 'Japan'],
                ['KE', 'Kenya'],
                ['KG', 'Kyrgyzstan'],
                ['KH', 'Cambodia'],
                ['KI', 'Kiribati'],
                ['KM', 'Comoros'],
                ['KN', 'Saint Kitts and Nevis'],
                ['KP', 'North Korea'],
                ['KR', 'South Korea'],
                ['KW', 'Kuwait'],
                ['KY', 'Cayman Islands'],
                ['KZ', 'Kazakhstan'],
                ['LA', 'Laos'],
                ['LB', 'Lebanon'],
                ['LC', 'Saint Lucia'],
                ['LI', 'Liechtenstein'],
                ['LK', 'Sri Lanka'],
                ['LR', 'Liberia'],
                ['LS', 'Lesotho'],
                ['LT', 'Lithuania'],
                ['LU', 'Luxembourg'],
                ['LV', 'Latvia'],
                ['LY', 'Libya'],
                ['MA', 'Morocco'],
                ['MC', 'Monaco'],
                ['MD', 'Moldova'],
                ['ME', 'Montenegro'],
                ['MF', 'Saint Martin'],
                ['MG', 'Madagascar'],
                ['MH', 'Marshall Islands'],
                ['MK', 'Macedonia'],
                ['ML', 'Mali'],
                ['MM', 'Myanmar'],
                ['MN', 'Mongolia'],
                ['MO', 'Macao'],
                ['MP', 'Northern Mariana Islands'],
                ['MQ', 'Martinique'],
                ['MR', 'Mauritania'],
                ['MS', 'Montserrat'],
                ['MT', 'Malta'],
                ['MU', 'Mauritius'],
                ['MV', 'Maldives'],
                ['MW', 'Malawi'],
                ['MX', 'Mexico'],
                ['MY', 'Malaysia'],
                ['MZ', 'Mozambique'],
                ['NA', 'Namibia'],
                ['NC', 'New Caledonia'],
                ['NE', 'Niger'],
                ['NF', 'Norfolk Island'],
                ['NG', 'Nigeria'],
                ['NI', 'Nicaragua'],
                ['NL', 'Netherlands'],
                ['NO', 'Norway'],
                ['NP', 'Nepal'],
                ['NR', 'Nauru'],
                ['NU', 'Niue'],
                ['NZ', 'New Zealand'],
                ['OM', 'Oman'],
                ['OS', 'South Ossetia'],
                ['PA', 'Panama'],
                ['PE', 'Peru'],
                ['PF', 'French Polynesia'],
                ['PG', 'Papua New Guinea'],
                ['PH', 'Philippines'],
                ['PK', 'Pakistan'],
                ['PL', 'Poland'],
                ['PM', 'Saint Pierre and Miquelon'],
                ['PN', 'Pitcairn'],
                ['PR', 'Puerto Rico'],
                ['PS', 'Palestinian Territory'],
                ['PT', 'Portugal'],
                ['PW', 'Palau'],
                ['PY', 'Paraguay'],
                ['QA', 'Qatar'],
                ['RE', 'Reunion'],
                ['RO', 'Romania'],
                ['RS', 'Serbia'],
                ['RU', 'Russia'],
                ['RW', 'Rwanda'],
                ['SA', 'Saudi Arabia'],
                ['SB', 'Solomon Islands'],
                ['SC', 'Seychelles'],
                ['SD', 'Sudan'],
                ['SE', 'Sweden'],
                ['SG', 'Singapore'],
                ['SH', 'Saint Helena'],
                ['SI', 'Slovenia'],
                ['SJ', 'Svalbard and Jan Mayen'],
                ['SK', 'Slovakia'],
                ['SL', 'Sierra Leone'],
                ['SM', 'San Marino'],
                ['SN', 'Senegal'],
                ['SO', 'Somalia'],
                ['SR', 'Suriname'],
                ['SS', 'South Sudan'],
                ['ST', 'Sao Tome and Principe'],
                ['SV', 'El Salvador'],
                ['SX', 'Sint Maarten'],
                ['SY', 'Syria'],
                ['SZ', 'Swaziland'],
                ['TC', 'Turks and Caicos Islands'],
                ['TD', 'Chad'],
                ['TF', 'French Southern Territories'],
                ['TG', 'Togo'],
                ['TH', 'Thailand'],
                ['TJ', 'Tajikistan'],
                ['TK', 'Tokelau'],
                ['TL', 'Timor Leste'],
                ['TM', 'Turkmenistan'],
                ['TN', 'Tunisia'],
                ['TO', 'Tonga'],
                ['TR', 'Turkey'],
                ['TT', 'Trinidad and Tobago'],
                ['TV', 'Tuvalu'],
                ['TW', 'Taiwan'],
                ['TZ', 'Tanzania'],
                ['UA', 'Ukraine'],
                ['UG', 'Uganda'],
                ['UM', 'United States Minor Outlying Islands'],
                ['US', 'United States'],
                ['UY', 'Uruguay'],
                ['UZ', 'Uzbekistan'],
                ['VA', 'Vatican'],
                ['VC', 'Saint Vincent and the Grenadines'],
                ['VE', 'Venezuela'],
                ['VG', 'British Virgin Islands'],
                ['VI', 'U.S. Virgin Islands'],
                ['VN', 'Vietnam'],
                ['VU', 'Vanuatu'],
                ['WF', 'Wallis and Futuna'],
                ['WS', 'Samoa'],
                ['XK', 'Kosovo'],
                ['YE', 'Yemen'],
                ['YT', 'Mayotte'],
                ['ZA', 'South Africa'],
                ['ZM', 'Zambia'],
                ['ZW', 'Zimbabwe']

            ];
        $this->batchInsert('{{%CountryTranslation}}',['CountryCode','Name'],$insert);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%CountryTranslation}}');
    }
}