<?php

return [
    'mm_number' => [
        '0' => '၀',
        '1' => '၁',
        '2' => '၂',
        '3' => '၃',
        '4' => '၄',
        '5' => '၅',
        '6' => '၆',
        '7' => '၇',
        '8' => '၈',
        '9' => '၉',
    ],
    'en_number' => [
        '၀' => '0',
        '၁' => '1',
        '၂' => '2',
        '၃' => '3',
        '၄' => '4',
        '၅' => '5',
        '၆' => '6',
        '၇' => '7',
        '၈' => '8',
        '၉' => '9',
    ],
    'mm_month' => [
        '1' => 'ဇန်နဝါရီ',
        '2' => 'ဖေဖေါ်ဝါရီ',
        '3' => 'မတ်',
        '4' => 'ဧပြီ',
        '5' => 'မေ',
        '6' => 'ဇွန်',
        '7' => 'ဇူိုင်',
        '8' => 'သြဂုတ်',
        '9' => 'စက်တင်ဘာ',
        '10' => 'အောက်တိုဘာ',
        '11' => 'နိုဝင်ဘာ',
        '12' => 'ဒီဇင်ဘာ',
    ],

	'regions' => [
		[
			'id' => 1,
			'region_en' => '1/',			// 'Kachin'
			'region_mm' => '၁/',			// 'ကချင်ပြည်နယ်'
		],
		[
			'id' => 2,
			'region_en' => '2/',			// 'Kayah'
			'region_mm' => '၂/'			// ကယားပြည်နယ်
		],
		[
			'id' => 3,
			'region_en' => '3/',			// 'Kayin'
			'region_mm' => '၃/'			// 'ကရင်ပြည်နယ်'
		],
		[
			'id' => 4,
			'region_en' => '4/',			// 'Chin'
			'region_mm' => '၄/'			//	'ချင်းပြည်နယ်'
		],
		[
			'id' => 5,
			'region_en' => '5/',			// 'Sagaing'
			'region_mm' => '၅/'			//	'စစ်ကိုင်းတိုင်း'
		],
		[
			'id' => 6,
			'region_en' => '6/',			// 'Tanintharyi'
			'region_mm' => '၆/'			//	'တနင်္သာရီတိုင်း'
		],
		[
			'id' => 7,
			'region_en' => '7/',			// 'Bago'
			'region_mm' => '၇/'			//	'ပဲခူးတိုင်း'
		],
		[
			'id' => 8,
			'region_en' => '8/',			// 'Magway'
			'region_mm' => '၈/'			//	'မကွေးတိုင်း'
		],
		[
			'id' => 9,
			'region_en' => '9/',			// 'Mandalay'
			'region_mm' => '၉/'			//	'မန္တလေးတိုင်း'
		],
		[
			'id' => 10,
			'region_en' => '10/',		// 'Mon'
			'region_mm' => '၁၀/'			//	'မွန်ပြည်နယ်'
		],
		[
			'id' => 11,
			'region_en' => '11/',		// 'Rakhine'
			'region_mm' => '၁၁/'			//	'ရခိုင်ပြည်နယ်'
		],
		[
			'id' => 12,
			'region_en' => '12/',		//	'Yangon'
			'region_mm' => '၁၂/'			//	'ရန်ကုန်တိုင်း'
		],
		[
			'id' => 13,
			'region_en' => '13/',		// 'Shan'
			'region_mm' => '၁၃/'			//	'ရှမ်းပြည်နယ်'
		],
		[
			'id' => 14,
			'region_en' => '14/',		// 'Ayeyawady'
			'region_mm' => '၁၄/'			//	'ဧရာဝတီတိုင်း'
		],
	],

	'citizens' => [
		[
			'id' 		 => 1,
			'citizen_en' => '(N)',
			'citizen_mm' => '(နိုင်)'
		],
		[
			'id' 		 => 2,
			'citizen_en' => '(E)',
			'citizen_mm' => '(ဧည့်)'
		],
		[
			'id' 		 => 3,
			'citizen_en' => '(P)',
			'citizen_mm' => '(ပြု)'
		]
	],

	'townships' => [
		[
			'region_id' => '1',
			'township_en' => 'KaMaTa',
			'township_mm' => 'ကမတ',
		],
		[
			'region_id' => '1',
			'township_en' => 'KaMaNa',
			'township_mm' => 'ကမန',
		],
		[
			'region_id' => '1',
			'township_en' => 'KaLaPha',
			'township_mm' => 'ကလဖ',
		],
		[
			'region_id' => '1',
			'township_en' => 'KhaPhaNa',
			'township_mm' => 'ခဖန',
		],
		[
			'region_id' => '1',
			'township_en' => 'KhaBaDa',
			'township_mm' => 'ခဘဒ',
		],
		[
			'region_id' => '1',
			'township_en' => 'KhaLaPha',
			'township_mm' => 'ခလဖ',
		],
		[
			'region_id' => '1',
			'township_en' => 'HsaDaNa',
			'township_mm' => 'ဆဒန',
		],
		[
			'region_id' => '1',
			'township_en' => 'HsaPaBa',
			'township_mm' => 'ဆပဘ',
		],
		[
			'region_id' => '1',
			'township_en' => 'HsaBaNa',
			'township_mm' => 'ဆဘန',
		],
		[
			'region_id' => '1',
			'township_en' => 'HsaLaNa',
			'township_mm' => 'ဆလန',
		],
		[
			'region_id' => '1',
			'township_en' => 'TaNaNa',
			'township_mm' => 'တနန',
		],
		[
			'region_id' => '1',
			'township_en' => 'DaPhaYa',
			'township_mm' => 'ဒဖယ',
		],
		[
			'region_id' => '1',
			'township_en' => 'NaMaNa',
			'township_mm' => 'နမန',
		],
		[
			'region_id' => '1',
			'township_en' => 'PaTaAh',
			'township_mm' => 'ပတအ',
		],
		[
			'region_id' => '1',
			'township_en' => 'PhaKaNa',
			'township_mm' => 'ဖကန',
		],
		[
			'region_id' => '1',
			'township_en' => 'BhaMaNa',
			'township_mm' => 'ဗမန',
		],
		[
			'region_id' => '1',
			'township_en' => 'MaKaTa',
			'township_mm' => 'မကတ',
		],
		[
			'region_id' => '1',
			'township_en' => 'MaKaNa',
			'township_mm' => 'မကန',
		],
		[
			'region_id' => '1',
			'township_en' => 'MaKhaBa',
			'township_mm' => 'မခဘ',
		],
		[
			'region_id' => '1',
			'township_en' => 'MaSaNa',
			'township_mm' => 'မစန',
		],
		[
			'region_id' => '1',
			'township_en' => 'MaNyaNa',
			'township_mm' => 'မညန',
		],
		[
			'region_id' => '1',
			'township_en' => 'MaPaNa',
			'township_mm' => 'မပန',
		],
		[
			'region_id' => '1',
			'township_en' => 'MaMaNa',
			'township_mm' => 'မမန',
		],
		[
			'region_id' => '1',
			'township_en' => 'RaKaNa',
			'township_mm' => 'ရကန',
		],
		[
			'region_id' => '1',
			'township_en' => 'LaGaNa',
			'township_mm' => 'လဂန',
		],
		[
			'region_id' => '1',
			'township_en' => 'WaMaNa',
			'township_mm' => 'ဝမန',
		],
		[
			'region_id' => '1',
			'township_en' => 'HaPaNa',
			'township_mm' => 'ဟပန',
		],
		[
			'region_id' => '1',
			'township_en' => 'AhGaYa',
			'township_mm' => 'အဂယ',
		],
		[
			'region_id' => '2',
			'township_en' => 'DaMaHsa',
			'township_mm' => 'ဒမဆ',
		],
		[
			'region_id' => '2',
			'township_en' => 'PhaHsaNa',
			'township_mm' => 'ဖဆန',
		],
		[
			'region_id' => '2',
			'township_en' => 'PhaRaHsa',
			'township_mm' => 'ဖရဆ',
		],
		[
			'region_id' => '2',
			'township_en' => 'BaLaKha',
			'township_mm' => 'ဘလခ',
		],
		[
			'region_id' => '2',
			'township_en' => 'MaSaNa',
			'township_mm' => 'မစန',
		],
		[
			'region_id' => '2',
			'township_en' => 'RaTaNa',
			'township_mm' => 'ရတန',
		],
		[
			'region_id' => '2',
			'township_en' => 'LaKaNa',
			'township_mm' => 'လကန',
		],
		[
			'region_id' => '3',
			'township_en' => 'KaKaRa',
			'township_mm' => 'ကကရ',
		],
		[
			'region_id' => '3',
			'township_en' => 'KaHsaKa',
			'township_mm' => 'ကဆက',
		],
		[
			'region_id' => '3',
			'township_en' => 'KaMaMa',
			'township_mm' => 'ကမမ',
		],
		[
			'region_id' => '3',
			'township_en' => 'KaDaNa',
			'township_mm' => 'ကဒန',
		],
		[
			'region_id' => '3',
			'township_en' => 'KaHsaKa',
			'township_mm' => 'ကဆက',
		],
		[
			'region_id' => '3',
			'township_en' => 'SaKaLa',
			'township_mm' => 'စကလ',
		],
		[
			'region_id' => '3',
			'township_en' => 'PaKaNa',
			'township_mm' => 'ပကန',
		],
		[
			'region_id' => '3',
			'township_en' => 'PhaPaNa',
			'township_mm' => 'ဖပန',
		],
		[
			'region_id' => '3',
			'township_en' => 'PhaAhNa',
			'township_mm' => 'ဖအန',
		],
		[
			'region_id' => '3',
			'township_en' => 'BaGaLa',
			'township_mm' => 'ဘဂလ',
		],
		[
			'region_id' => '3',
			'township_en' => 'BaThaSa',
			'township_mm' => 'ဘသစ',
		],
		[
			'region_id' => '3',
			'township_en' => 'BaAhNa',
			'township_mm' => 'ဘအန',
		],
		[
			'region_id' => '3',
			'township_en' => 'MaWaTa',
			'township_mm' => 'မဝတ',
		],
		[
			'region_id' => '3',
			'township_en' => 'RaRaTha',
			'township_mm' => 'ရရသ',
		],
		[
			'region_id' => '3',
			'township_en' => 'LaBaNa',
			'township_mm' => 'လဘန',
		],
		[
			'region_id' => '3',
			'township_en' => 'LaThaNa',
			'township_mm' => 'လသန',
		],
		[
			'region_id' => '3',
			'township_en' => 'WaLaMa',
			'township_mm' => 'ဝလမ',
		],
		[
			'region_id' => '3',
			'township_en' => 'ThaTaNa',
			'township_mm' => 'သတန',
		],
		[
			'region_id' => '3',
			'township_en' => 'ThaTaKa',
			'township_mm' => 'သတက',
		],
		[
			'region_id' => '4',
			'township_en' => 'KaPaLa',
			'township_mm' => 'ကပလ',
		],
		[
			'region_id' => '4',
			'township_en' => 'TaZaNa',
			'township_mm' => 'တဇန',
		],
		[
			'region_id' => '4',
			'township_en' => 'TaTaNa',
			'township_mm' => 'တတန',
		],
		[
			'region_id' => '4',
			'township_en' => 'HtaTaLa',
			'township_mm' => 'ထတလ',
		],
		[
			'region_id' => '4',
			'township_en' => 'PaLaWa',
			'township_mm' => 'ပလဝ',
		],
		[
			'region_id' => '4',
			'township_en' => 'PhaLaNa',
			'township_mm' => 'ဖလန',
		],
		[
			'region_id' => '4',
			'township_en' => 'MaTaNa',
			'township_mm' => 'မတန',
		],
		[
			'region_id' => '4',
			'township_en' => 'MaTaPa',
			'township_mm' => 'မတပ',
		],
		[
			'region_id' => '4',
			'township_en' => 'HaKhaNa',
			'township_mm' => 'ဟခန',
		],
		[
			'region_id' => '5',
			'township_en' => 'KaNaNa',
			'township_mm' => 'ကနန',
		],
		[
			'region_id' => '5',
			'township_en' => 'KaBaLa',
			'township_mm' => 'ကဘလ',
		],
		[
			'region_id' => '5',
			'township_en' => 'KaMaNa',
			'township_mm' => 'ကမန',
		],
		[
			'region_id' => '5',
			'township_en' => 'KaLaTa',
			'township_mm' => 'ကလတ',
		],
		[
			'region_id' => '5',
			'township_en' => 'KaLaHta',
			'township_mm' => 'ကလထ',
		],
		[
			'region_id' => '5',
			'township_en' => 'KaLaNa',
			'township_mm' => 'ကလန',
		],
		[
			'region_id' => '5',
			'township_en' => 'KaLaWa',
			'township_mm' => 'ကလဝ',
		],
		[
			'region_id' => '5',
			'township_en' => 'KaThaNa',
			'township_mm' => 'ကသန',
		],
		[
			'region_id' => '5',
			'township_en' => 'KhaTaNa',
			'township_mm' => 'ခတန',
		],
		[
			'region_id' => '5',
			'township_en' => 'KhaUTa',
			'township_mm' => 'ခဥတ',
		],
		[
			'region_id' => '5',
			'township_en' => 'KhaUNa',
			'township_mm' => 'ခဥန',
		],
		[
			'region_id' => '5',
			'township_en' => 'NgaZaNa',
			'township_mm' => 'ငဇန',
		],
		[
			'region_id' => '5',
			'township_en' => 'SaKaTa',
			'township_mm' => 'စကတ',
		],
		[
			'region_id' => '5',
			'township_en' => 'SaKaNa',
			'township_mm' => 'စကန',
		],
		[
			'region_id' => '5',
			'township_en' => 'SaMaRa',
			'township_mm' => 'စမရ',
		],
		[
			'region_id' => '5',
			'township_en' => 'HsaLaKa',
			'township_mm' => 'ဆလက',
		],
		[
			'region_id' => '5',
			'township_en' => 'TaHsaNa',
			'township_mm' => 'တဆန',
		],
		[
			'region_id' => '5',
			'township_en' => 'TaMaNa',
			'township_mm' => 'တမန',
		],
		[
			'region_id' => '5',
			'township_en' => 'HtaKhaNa',
			'township_mm' => 'ထခန',
		],
		[
			'region_id' => '5',
			'township_en' => 'HtaPaKha',
			'township_mm' => 'ထပခ',
		],
		[
			'region_id' => '5',
			'township_en' => 'DaPaYa',
			'township_mm' => 'ဒပယ',
		],
		[
			'region_id' => '5',
			'township_en' => 'DaHaNa',
			'township_mm' => 'ဒဟန',
		],
		[
			'region_id' => '5',
			'township_en' => 'NaYaNa',
			'township_mm' => 'နယန',
		],
		[
			'region_id' => '5',
			'township_en' => 'PaSaNa',
			'township_mm' => 'ပစန',
		],
		[
			'region_id' => '5',
			'township_en' => 'PaLaNa',
			'township_mm' => 'ပလန',
		],
		[
			'region_id' => '5',
			'township_en' => 'PaLaBa',
			'township_mm' => 'ပလဘ',
		],
		[
			'region_id' => '5',
			'township_en' => 'PhaPaNa',
			'township_mm' => 'ဖပန',
		],
		[
			'region_id' => '5',
			'township_en' => 'BhaMaNa',
			'township_mm' => 'ဗမန',
		],
		[
			'region_id' => '5',
			'township_en' => 'BaTaLa',
			'township_mm' => 'ဘတလ',
		],
		[
			'region_id' => '5',
			'township_en' => 'MaKaNa',
			'township_mm' => 'မကန',
		],
		[
			'region_id' => '5',
			'township_en' => 'MaPaLa',
			'township_mm' => 'မပလ',
		],
		[
			'region_id' => '5',
			'township_en' => 'MaMaTa',
			'township_mm' => 'မမတ',
		],
		[
			'region_id' => '5',
			'township_en' => 'MaMaNa',
			'township_mm' => 'မမန',
		],
		[
			'region_id' => '5',
			'township_en' => 'MaRaNa',
			'township_mm' => 'မရန',
		],
		[
			'region_id' => '5',
			'township_en' => 'MaLaNa',
			'township_mm' => 'မလန',
		],
		[
			'region_id' => '5',
			'township_en' => 'MaThaNa',
			'township_mm' => 'မသန',
		],
		[
			'region_id' => '5',
			'township_en' => 'YaMaPa',
			'township_mm' => 'ယမပ',
		],
		[
			'region_id' => '5',
			'township_en' => 'RaBaNa',
			'township_mm' => 'ရဘန',
		],
		[
			'region_id' => '5',
			'township_en' => 'RaUNa',
			'township_mm' => 'ရဥန',
		],
		[
			'region_id' => '5',
			'township_en' => 'LaYaNa',
			'township_mm' => 'လယန',
		],
		[
			'region_id' => '5',
			'township_en' => 'LaRaNa',
			'township_mm' => 'လရန',
		],
		[
			'region_id' => '5',
			'township_en' => 'LaHaNa',
			'township_mm' => 'လဟန',
		],
		[
			'region_id' => '5',
			'township_en' => 'WaLaNa',
			'township_mm' => 'ဝလန',
		],
		[
			'region_id' => '5',
			'township_en' => 'WaThaNa',
			'township_mm' => 'ဝသန',
		],
		[
			'region_id' => '5',
			'township_en' => 'HaMaLa',
			'township_mm' => 'ဟမလ',
		],
		[
			'region_id' => '5',
			'township_en' => 'AhTaNa',
			'township_mm' => 'အတန',
		],
		[
			'region_id' => '5',
			'township_en' => 'AhRaTa',
			'township_mm' => 'အရတ',
		],
		[
			'region_id' => '6',
			'township_en' => 'KaSaNa',
			'township_mm' => 'ကစန',
		],
		[
			'region_id' => '6',
			'township_en' => 'KaThaNa',
			'township_mm' => 'ကသန',
		],
		[
			'region_id' => '6',
			'township_en' => 'TaThaRa',
			'township_mm' => 'တသရ',
		],
		[
			'region_id' => '6',
			'township_en' => 'HtaWaNa',
			'township_mm' => 'ထဝန',
		],
		[
			'region_id' => '6',
			'township_en' => 'PaLaNa',
			'township_mm' => 'ပလန',
		],
		[
			'region_id' => '6',
			'township_en' => 'BaPaNa',
			'township_mm' => 'ဘပန',
		],
		[
			'region_id' => '6',
			'township_en' => 'MaMaNa',
			'township_mm' => 'မမန',
		],
		[
			'region_id' => '6',
			'township_en' => 'MaAhNa',
			'township_mm' => 'မအန',
		],
		[
			'region_id' => '6',
			'township_en' => 'MaAhRa',
			'township_mm' => 'မအရ',
		],
		[
			'region_id' => '6',
			'township_en' => 'RaPhaNa',
			'township_mm' => 'ရဖန',
		],
		[
			'region_id' => '6',
			'township_en' => 'LaLaNa',
			'township_mm' => 'လလန',
		],
		[
			'region_id' => '6',
			'township_en' => 'ThaRaKha',
			'township_mm' => 'သရခ',
		],
		[
			'region_id' => '7',
			'township_en' => 'KaKaNa',
			'township_mm' => 'ကကန',
		],
		[
			'region_id' => '7',
			'township_en' => 'KaTaKha',
			'township_mm' => 'ကတခ',
		],
		[
			'region_id' => '7',
			'township_en' => 'KaThaKha',
			'township_mm' => 'ကသခ',
		],
		[
			'region_id' => '7',
			'township_en' => 'KaPaKa',
			'township_mm' => 'ကပက',
		],
		[
			'region_id' => '7',
			'township_en' => 'KaWaNa',
			'township_mm' => 'ကဝန',
		],
		[
			'region_id' => '7',
			'township_en' => 'ZaKaNa',
			'township_mm' => 'ဇကန',
		],
		[
			'region_id' => '7',
			'township_en' => 'NyaLaPa',
			'township_mm' => 'ညလပ',
		],
		[
			'region_id' => '7',
			'township_en' => 'TaNgaNa',
			'township_mm' => 'တငန',
		],
		[
			'region_id' => '7',
			'township_en' => 'HtaTaPa',
			'township_mm' => 'ထတပ',
		],
		[
			'region_id' => '7',
			'township_en' => 'DaUNa',
			'township_mm' => 'ဒဥန',
		],
		[
			'region_id' => '7',
			'township_en' => 'NaTaLa',
			'township_mm' => 'နတလ',
		],
		[
			'region_id' => '7',
			'township_en' => 'PaKhaTa',
			'township_mm' => 'ပခတ',
		],
		[
			'region_id' => '7',
			'township_en' => 'PaKhaNa',
			'township_mm' => 'ပခန',
		],
		[
			'region_id' => '7',
			'township_en' => 'PaTaTa',
			'township_mm' => 'ပတတ',
		],
		[
			'region_id' => '7',
			'township_en' => 'PaTaNa',
			'township_mm' => 'ပတန',
		],
		[
			'region_id' => '7',
			'township_en' => 'PaMaNa',
			'township_mm' => 'ပမန',
		],
		[
			'region_id' => '7',
			'township_en' => 'PhaMaNa',
			'township_mm' => 'ဖမန',
		],
		[
			'region_id' => '7',
			'township_en' => 'MaNyaNa',
			'township_mm' => 'မညန',
		],
		[
			'region_id' => '7',
			'township_en' => 'MaLaNa',
			'township_mm' => 'မလန',
		],
		[
			'region_id' => '7',
			'township_en' => 'RaKaNa',
			'township_mm' => 'ရကန',
		],
		[
			'region_id' => '7',
			'township_en' => 'RaTaNa',
			'township_mm' => 'ရတန',
		],
		[
			'region_id' => '7',
			'township_en' => 'RaTaRa',
			'township_mm' => 'ရတရ',
		],
		[
			'region_id' => '7',
			'township_en' => 'LaPaTa',
			'township_mm' => 'လပတ',
		],
		[
			'region_id' => '7',
			'township_en' => 'WaMaNa',
			'township_mm' => 'ဝမန',
		],
		[
			'region_id' => '7',
			'township_en' => 'ThaKaNa',
			'township_mm' => 'သကန',
		],
		[
			'region_id' => '7',
			'township_en' => 'ThaNaPa',
			'township_mm' => 'သနပ',
		],
		[
			'region_id' => '7',
			'township_en' => 'ThaWaTa',
			'township_mm' => 'သဝတ',
		],
		[
			'region_id' => '7',
			'township_en' => 'AhTaNa',
			'township_mm' => 'အတန',
		],
		[
			'region_id' => '7',
			'township_en' => 'AhPhaNa',
			'township_mm' => 'အဖန',
		],
		[
			'region_id' => '7',
			'township_en' => 'UTaNa',
			'township_mm' => 'ဥတန',
		],
		[
			'region_id' => '8',
			'township_en' => 'KaMaNa',
			'township_mm' => 'ကမန',
		],
		[
			'region_id' => '8',
			'township_en' => 'KaHtaNa',
			'township_mm' => 'ကထန',
		],
		[
			'region_id' => '8',
			'township_en' => 'KhaMaNa',
			'township_mm' => 'ခမန',
		],
		[
			'region_id' => '8',
			'township_en' => 'GaGaNa',
			'township_mm' => 'ဂဂန',
		],
		[
			'region_id' => '8',
			'township_en' => 'NgaPhaNa',
			'township_mm' => 'ငဖန',
		],
		[
			'region_id' => '8',
			'township_en' => 'SaTaRa',
			'township_mm' => 'စတရ',
		],
		[
			'region_id' => '8',
			'township_en' => 'SaLaNa',
			'township_mm' => 'စလန',
		],
		[
			'region_id' => '8',
			'township_en' => 'HsaLaNa',
			'township_mm' => 'ဆလန',
		],
		[
			'region_id' => '8',
			'township_en' => 'HsaPaWa',
			'township_mm' => 'ဆပ၀',
		],
		[
			'region_id' => '8',
			'township_en' => 'HsaPhaNa',
			'township_mm' => 'ဆဖန',
		],
		[
			'region_id' => '8',
			'township_en' => 'HsaMaNa',
			'township_mm' => 'ဆမန',
		],
		[
			'region_id' => '8',
			'township_en' => 'TaTaKa',
			'township_mm' => 'တတက',
		],
		[
			'region_id' => '8',
			'township_en' => 'HtaLaNa',
			'township_mm' => 'ထလန',
		],
		[
			'region_id' => '8',
			'township_en' => 'NaMaNa',
			'township_mm' => 'နမန',
		],
		[
			'region_id' => '8',
			'township_en' => 'PaKhaKa',
			'township_mm' => 'ပခက',
		],
		[
			'region_id' => '8',
			'township_en' => 'PaPhaNa',
			'township_mm' => 'ပဖန',
		],
		[
			'region_id' => '8',
			'township_en' => 'PaMaNa',
			'township_mm' => 'ပမန',
		],
		[
			'region_id' => '8',
			'township_en' => 'MaKaNa',
			'township_mm' => 'မကန',
		],
		[
			'region_id' => '8',
			'township_en' => 'MaTaNa',
			'township_mm' => 'မတန',
		],
		[
			'region_id' => '8',
			'township_en' => 'MaHtaNa',
			'township_mm' => 'မထန',
		],
		[
			'region_id' => '8',
			'township_en' => 'MaBaNa',
			'township_mm' => 'မဘန',
		],
		[
			'region_id' => '8',
			'township_en' => 'MaMaNa',
			'township_mm' => 'မမန',
		],
		[
			'region_id' => '8',
			'township_en' => 'MaLaNa',
			'township_mm' => 'မလန',
		],
		[
			'region_id' => '8',
			'township_en' => 'MaThaNa',
			'township_mm' => 'မသန',
		],
		[
			'region_id' => '8',
			'township_en' => 'RaSaKa',
			'township_mm' => 'ရစက',
		],
		[
			'region_id' => '8',
			'township_en' => 'RaNaKha',
			'township_mm' => 'ရနခ',
		],
		[
			'region_id' => '8',
			'township_en' => 'ThaRaNa',
			'township_mm' => 'သရန',
		],
		[
			'region_id' => '8',
			'township_en' => 'AhLaNa',
			'township_mm' => 'အလန',
		],
		[
			'region_id' => '9',
			'township_en' => 'KaHsaNa',
			'township_mm' => 'ကဆန',
		],
		[
			'region_id' => '9',
			'township_en' => 'KaPaTa',
			'township_mm' => 'ကပတ',
		],
		[
			'region_id' => '9',
			'township_en' => 'KhaMaSa',
			'township_mm' => 'ခမစ',
		],
		[
			'region_id' => '9',
			'township_en' => 'KhaMaTha',
			'township_mm' => 'ခမသ',
		],
		[
			'region_id' => '9',
			'township_en' => 'KhaAhZa',
			'township_mm' => 'ခအဇ',
		],
		[
			'region_id' => '9',
			'township_en' => 'NgaZaNa',
			'township_mm' => 'ငဇန',
		],
		[
			'region_id' => '9',
			'township_en' => 'NgaThaRa',
			'township_mm' => 'ငသရ',
		],
		[
			'region_id' => '9',
			'township_en' => 'SaKaTa',
			'township_mm' => 'စကတ',
		],
		[
			'region_id' => '9',
			'township_en' => 'SaKaNa',
			'township_mm' => 'စကန',
		],
		[
			'region_id' => '9',
			'township_en' => 'ZaBhaTha',
			'township_mm' => 'ဇဗသ',
		],
		[
			'region_id' => '9',
			'township_en' => 'ZaYaTha',
			'township_mm' => 'ဇယသ',
		],
		[
			'region_id' => '9',
			'township_en' => 'NyaUNa',
			'township_mm' => 'ညဥန',
		],
		[
			'region_id' => '9',
			'township_en' => 'TaKaNa',
			'township_mm' => 'တကန',
		],
		[
			'region_id' => '9',
			'township_en' => 'TaTaNa',
			'township_mm' => 'တတန',
		],
		[
			'region_id' => '9',
			'township_en' => 'TaTaU',
			'township_mm' => 'တတဥ',
		],
		[
			'region_id' => '9',
			'township_en' => 'TaThaNa',
			'township_mm' => 'တသန',
		],
		[
			'region_id' => '9',
			'township_en' => 'DaKhaTha',
			'township_mm' => 'ဒခသ',
		],
		[
			'region_id' => '9',
			'township_en' => 'NaHtaKa',
			'township_mm' => 'နထက',
		],
		[
			'region_id' => '9',
			'township_en' => 'PaKaKha',
			'township_mm' => 'ပကခ',
		],
		[
			'region_id' => '9',
			'township_en' => 'PaBhaTha',
			'township_mm' => 'ပဗသ',
		],
		[
			'region_id' => '9',
			'township_en' => 'PaBaNa',
			'township_mm' => 'ပဘန',
		],
		[
			'region_id' => '9',
			'township_en' => 'PaMaNa',
			'township_mm' => 'ပမန',
		],
		[
			'region_id' => '9',
			'township_en' => 'PaThaKa',
			'township_mm' => 'ပသက',
		],
		[
			'region_id' => '9',
			'township_en' => 'PaULa',
			'township_mm' => 'ပဥလ',
		],
		[
			'region_id' => '9',
			'township_en' => 'MaKaNa',
			'township_mm' => 'မကန',
		],
		[
			'region_id' => '9',
			'township_en' => 'MaKhaNa',
			'township_mm' => 'မခန',
		],
		[
			'region_id' => '9',
			'township_en' => 'MaTaRa',
			'township_mm' => 'မတရ',
		],
		[
			'region_id' => '9',
			'township_en' => 'MaHtaLa',
			'township_mm' => 'မထလ',
		],
		[
			'region_id' => '9',
			'township_en' => 'MaNaTa',
			'township_mm' => 'မနတ',
		],
		[
			'region_id' => '9',
			'township_en' => 'MaNaMa',
			'township_mm' => 'မနမ',
		],
		[
			'region_id' => '9',
			'township_en' => 'MaMaNa',
			'township_mm' => 'မမန',
		],
		[
			'region_id' => '9',
			'township_en' => 'MaRaTa',
			'township_mm' => 'မရတ',
		],
		[
			'region_id' => '9',
			'township_en' => 'MaRaMa',
			'township_mm' => 'မရမ',
		],
		[
			'region_id' => '9',
			'township_en' => 'MaLaNa',
			'township_mm' => 'မလန',
		],
		[
			'region_id' => '9',
			'township_en' => 'MaThaNa',
			'township_mm' => 'မသန',
		],
		[
			'region_id' => '9',
			'township_en' => 'MaHaMa',
			'township_mm' => 'မဟမ',
		],
		[
			'region_id' => '9',
			'township_en' => 'MaAhZa',
			'township_mm' => 'မအဇ',
		],
		[
			'region_id' => '9',
			'township_en' => 'RaMaTha',
			'township_mm' => 'ရမသ',
		],
		[
			'region_id' => '9',
			'township_en' => 'LaWaNa',
			'township_mm' => 'လ၀န',
		],
		[
			'region_id' => '9',
			'township_en' => 'WaTaNa',
			'township_mm' => '၀တန',
		],
		[
			'region_id' => '9',
			'township_en' => 'ThaSaNa',
			'township_mm' => 'သစန',
		],
		[
			'region_id' => '9',
			'township_en' => 'ThaPaKa',
			'township_mm' => 'သပက',
		],
		[
			'region_id' => '9',
			'township_en' => 'AhKhaNa',
			'township_mm' => 'အခန',
		],
		[
			'region_id' => '9',
			'township_en' => 'AhMaZa',
			'township_mm' => 'အမဇ',
		],
		[
			'region_id' => '9',
			'township_en' => 'AhMaRa',
			'township_mm' => 'အမရ',
		],
		[
			'region_id' => '9',
			'township_en' => 'UTaTha',
			'township_mm' => 'ဥတသ',
		],
		[
			'region_id' => '10',
			'township_en' => 'KaHtaNa',
			'township_mm' => 'ကထန',
		],
		[
			'region_id' => '10',
			'township_en' => 'KaMaRa',
			'township_mm' => 'ကမရ',
		],
		[
			'region_id' => '10',
			'township_en' => 'KhaHsaNa',
			'township_mm' => 'ခဆန',
		],
		[
			'region_id' => '10',
			'township_en' => 'PaMaNa',
			'township_mm' => 'ပမန',
		],
		[
			'region_id' => '10',
			'township_en' => 'BaLaNa',
			'township_mm' => 'ဘလန',
		],
		[
			'region_id' => '10',
			'township_en' => 'MaDaNa',
			'township_mm' => 'မဒန',
		],
		[
			'region_id' => '10',
			'township_en' => 'MaLaMa',
			'township_mm' => 'မလမ',
		],
		[
			'region_id' => '10',
			'township_en' => 'RaMaNa',
			'township_mm' => 'ရမန',
		],
		[
			'region_id' => '10',
			'township_en' => 'LaMaNa',
			'township_mm' => 'လမန',
		],
		[
			'region_id' => '10',
			'township_en' => 'ThaHtaNa',
			'township_mm' => 'သထန',
		],
		[
			'region_id' => '10',
			'township_en' => 'ThaPhaRa',
			'township_mm' => 'သဖရ',
		],
		[
			'region_id' => '11',
			'township_en' => 'KaTaNa',
			'township_mm' => 'ကတန',
		],
		[
			'region_id' => '11',
			'township_en' => 'KaPhaNa',
			'township_mm' => 'ကဖန',
		],
		[
			'region_id' => '11',
			'township_en' => 'KaTaLa',
			'township_mm' => 'ကတလ',
		],
		[
			'region_id' => '11',
			'township_en' => 'KaPhaNa',
			'township_mm' => 'ကဖန',
		],
		[
			'region_id' => '11',
			'township_en' => 'GaMaNa',
			'township_mm' => 'ဂမန',
		],
		[
			'region_id' => '11',
			'township_en' => 'SaTaNa',
			'township_mm' => 'စတန',
		],
		[
			'region_id' => '11',
			'township_en' => 'TaKaNa',
			'township_mm' => 'တကန',
		],
		[
			'region_id' => '11',
			'township_en' => 'PaNhaKa',
			'township_mm' => 'ပဏက',
		],
		[
			'region_id' => '11',
			'township_en' => 'PaTaNa',
			'township_mm' => 'ပတန',
		],
		[
			'region_id' => '11',
			'township_en' => 'ThaPaWa',
			'township_mm' => 'သပဝ',
		],
		[
			'region_id' => '11',
			'township_en' => 'ThaThaTa',
			'township_mm' => 'သသတ',
		],
		[
			'region_id' => '11',
			'township_en' => 'BaThaTa',
			'township_mm' => 'ဘသတ',
		],
		[
			'region_id' => '11',
			'township_en' => 'MaTaNa',
			'township_mm' => 'မတန',
		],
		[
			'region_id' => '11',
			'township_en' => 'MaPaTa',
			'township_mm' => 'မပတ',
		],
		[
			'region_id' => '11',
			'township_en' => 'MaPaNa',
			'township_mm' => 'မပန',
		],
		[
			'region_id' => '11',
			'township_en' => 'MaAhNa',
			'township_mm' => 'မအန',
		],
		[
			'region_id' => '11',
			'township_en' => 'MaUNa',
			'township_mm' => 'မဥန',
		],
		[
			'region_id' => '11',
			'township_en' => 'RaBhaNa',
			'township_mm' => 'ရဗန',
		],
		[
			'region_id' => '11',
			'township_en' => 'RaThaTa',
			'township_mm' => 'ရသတ',
		],
		[
			'region_id' => '11',
			'township_en' => 'ThaTaNa',
			'township_mm' => 'သတန',
		],
		[
			'region_id' => '11',
			'township_en' => 'AhMaNa',
			'township_mm' => 'အမန',
		],
		[
			'region_id' => '12',
			'township_en' => 'KaKaKa',
			'township_mm' => 'ကကက',
		],
		[
			'region_id' => '12',
			'township_en' => 'KaKhaKa',
			'township_mm' => 'ကခက',
		],
		[
			'region_id' => '12',
			'township_en' => 'KaTaTa',
			'township_mm' => 'ကတတ',
		],
		[
			'region_id' => '12',
			'township_en' => 'KaTaNa',
			'township_mm' => 'ကတန',
		],
		[
			'region_id' => '12',
			'township_en' => 'KaMaTa',
			'township_mm' => 'ကမတ',
		],
		[
			'region_id' => '12',
			'township_en' => 'KaMaNa',
			'township_mm' => 'ကမန',
		],
		[
			'region_id' => '12',
			'township_en' => 'KaMaRa',
			'township_mm' => 'ကမရ',
		],
		[
			'region_id' => '12',
			'township_en' => 'KhaRaNa',
			'township_mm' => 'ခရန',
		],
		[
			'region_id' => '12',
			'township_en' => 'SaKhaNa',
			'township_mm' => 'စခန',
		],
		[
			'region_id' => '12',
			'township_en' => 'HsaKaKha',
			'township_mm' => 'ဆကခ',
		],
		[
			'region_id' => '12',
			'township_en' => 'HsaKaNa',
			'township_mm' => 'ဆကန',
		],
		[
			'region_id' => '12',
			'township_en' => 'TaKaNa',
			'township_mm' => 'တကန',
		],
		[
			'region_id' => '12',
			'township_en' => 'TaTaHta',
			'township_mm' => 'တတထ',
		],
		[
			'region_id' => '12',
			'township_en' => 'TaTaNa',
			'township_mm' => 'တတန',
		],
		[
			'region_id' => '12',
			'township_en' => 'TaMaNa',
			'township_mm' => 'တမန',
		],
		[
			'region_id' => '12',
			'township_en' => 'HtaTaPa',
			'township_mm' => 'ထတပ',
		],
		[
			'region_id' => '12',
			'township_en' => 'DaGaHsa',
			'township_mm' => 'ဒဂဆ',
		],
		[
			'region_id' => '12',
			'township_en' => 'DaGaTa',
			'township_mm' => 'ဒဂတ',
		],
		[
			'region_id' => '12',
			'township_en' => 'DaGaNa',
			'township_mm' => 'ဒဂန',
		],
		[
			'region_id' => '12',
			'township_en' => 'DaGaMa',
			'township_mm' => 'ဒဂမ',
		],
		[
			'region_id' => '12',
			'township_en' => 'DaGaRa',
			'township_mm' => 'ဒဂရ',
		],
		[
			'region_id' => '12',
			'township_en' => 'DaPaNa',
			'township_mm' => 'ဒပန',
		],
		[
			'region_id' => '12',
			'township_en' => 'DaLaNa',
			'township_mm' => 'ဒလန',
		],
		[
			'region_id' => '12',
			'township_en' => 'PaZaTa',
			'township_mm' => 'ပဇတ',
		],
		[
			'region_id' => '12',
			'township_en' => 'PaBaTa',
			'township_mm' => 'ပဘတ',
		],
		[
			'region_id' => '12',
			'township_en' => 'BhaTaHta',
			'township_mm' => 'ဗတထ',
		],
		[
			'region_id' => '12',
			'township_en' => 'BhaHaNa',
			'township_mm' => 'ဗဟန',
		],
		[
			'region_id' => '12',
			'township_en' => 'MaGaTa',
			'township_mm' => 'မဂတ',
		],
		[
			'region_id' => '12',
			'township_en' => 'MaGaDa',
			'township_mm' => 'မဂဒ',
		],
		[
			'region_id' => '12',
			'township_en' => 'MaBaNa',
			'township_mm' => 'မဘန',
		],
		[
			'region_id' => '12',
			'township_en' => 'MaRaKa',
			'township_mm' => 'မရက',
		],
		[
			'region_id' => '12',
			'township_en' => 'MaUKa',
			'township_mm' => 'မဥက',
		],
		[
			'region_id' => '12',
			'township_en' => 'RaKaNa',
			'township_mm' => 'ရကန',
		],
		[
			'region_id' => '12',
			'township_en' => 'RaPaTha',
			'township_mm' => 'ရပသ',
		],
		[
			'region_id' => '12',
			'township_en' => 'LaKaNa',
			'township_mm' => 'လကန',
		],
		[
			'region_id' => '12',
			'township_en' => 'LaMaTa',
			'township_mm' => 'လမတ',
		],
		[
			'region_id' => '12',
			'township_en' => 'LaMaNa',
			'township_mm' => 'လမန',
		],
		[
			'region_id' => '12',
			'township_en' => 'LaThaNa',
			'township_mm' => 'လသန',
		],
		[
			'region_id' => '12',
			'township_en' => 'LaThaYa',
			'township_mm' => 'လသယ',
		],
		[
			'region_id' => '12',
			'township_en' => 'ThaKaTa',
			'township_mm' => 'သကတ',
		],
		[
			'region_id' => '12',
			'township_en' => 'ThaKhaNa',
			'township_mm' => 'သခန',
		],
		[
			'region_id' => '12',
			'township_en' => 'ThaGhaKa',
			'township_mm' => 'သဃက',
		],
		[
			'region_id' => '12',
			'township_en' => 'ThaLaNa',
			'township_mm' => 'သလန',
		],
		[
			'region_id' => '12',
			'township_en' => 'AhSaNa',
			'township_mm' => 'အစန',
		],
		[
			'region_id' => '12',
			'township_en' => 'AhLaNa',
			'township_mm' => 'အလန',
		],
		[
			'region_id' => '12',
			'township_en' => 'UKaTa',
			'township_mm' => 'ဥကတ',
		],
		[
			'region_id' => '12',
			'township_en' => 'UKaMa',
			'township_mm' => 'ဥကမ',
		],
		[
			'region_id' => '13',
			'township_en' => 'KaKaNa',
			'township_mm' => 'ကကန',
		],
		[
			'region_id' => '13',
			'township_en' => 'KaKhaNa',
			'township_mm' => 'ကခန',
		],
		[
			'region_id' => '13',
			'township_en' => 'KaTaNa',
			'township_mm' => 'ကတန',
		],
		[
			'region_id' => '13',
			'township_en' => 'KaMaNa',
			'township_mm' => 'ကမန',
		],
		[
			'region_id' => '13',
			'township_en' => 'KaLaTa',
			'township_mm' => 'ကလတ',
		],
		[
			'region_id' => '13',
			'township_en' => 'KaLaNa',
			'township_mm' => 'ကလန',
		],
		[
			'region_id' => '13',
			'township_en' => 'KaThaNa',
			'township_mm' => 'ကသန',
		],
		[
			'region_id' => '13',
			'township_en' => 'KaHaNa',
			'township_mm' => 'ကဟန',
		],
		[
			'region_id' => '13',
			'township_en' => 'KhaLaNa',
			'township_mm' => 'ခလန',
		],
		[
			'region_id' => '13',
			'township_en' => 'HsaHsaNa',
			'township_mm' => 'ဆဆန',
		],
		[
			'region_id' => '13',
			'township_en' => 'NyaRaNa',
			'township_mm' => 'ညရန',
		],
		[
			'region_id' => '13',
			'township_en' => 'TaKaNa',
			'township_mm' => 'တကန',
		],
		[
			'region_id' => '13',
			'township_en' => 'TaKhaNa',
			'township_mm' => 'တခန',
		],
		[
			'region_id' => '13',
			'township_en' => 'TaKhaLa',
			'township_mm' => 'တခလ',
		],
		[
			'region_id' => '13',
			'township_en' => 'TaTaNa',
			'township_mm' => 'တတန',
		],
		[
			'region_id' => '13',
			'township_en' => 'TaYaNa',
			'township_mm' => 'တယန',
		],
		[
			'region_id' => '13',
			'township_en' => 'TaLaNa',
			'township_mm' => 'တလန',
		],
		[
			'region_id' => '13',
			'township_en' => 'NaKhaTa',
			'township_mm' => 'နခတ',
		],
		[
			'region_id' => '13',
			'township_en' => 'NaKhaNa',
			'township_mm' => 'နခန',
		],
		[
			'region_id' => '13',
			'township_en' => 'NaSaNa',
			'township_mm' => 'နစန',
		],
		[
			'region_id' => '13',
			'township_en' => 'NaHsaNa',
			'township_mm' => 'နဆန',
		],
		[
			'region_id' => '13',
			'township_en' => 'NaTaNa',
			'township_mm' => 'နတန',
		],
		[
			'region_id' => '13',
			'township_en' => 'NaTaRa',
			'township_mm' => 'နတရ',
		],
		[
			'region_id' => '13',
			'township_en' => 'NaPhaNa',
			'township_mm' => 'နဖန',
		],
		[
			'region_id' => '13',
			'township_en' => 'NaMaTa',
			'township_mm' => 'နမတ',
		],
		[
			'region_id' => '13',
			'township_en' => 'PaHsaNa',
			'township_mm' => 'ပဆန',
		],
		[
			'region_id' => '13',
			'township_en' => 'PaTaYa',
			'township_mm' => 'ပတယ',
		],
		[
			'region_id' => '13',
			'township_en' => 'PaYaNa',
			'township_mm' => 'ပယန',
		],
		[
			'region_id' => '13',
			'township_en' => 'PaLaTa',
			'township_mm' => 'ပလတ',
		],
		[
			'region_id' => '13',
			'township_en' => 'PaLaNa',
			'township_mm' => 'ပလန',
		],
		[
			'region_id' => '13',
			'township_en' => 'PaWaNa',
			'township_mm' => 'ပ၀န',
		],
		[
			'region_id' => '13',
			'township_en' => 'PhaKhaNa',
			'township_mm' => 'ဖခန',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaKaTa',
			'township_mm' => 'မကတ',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaKaNa',
			'township_mm' => 'မကန',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaKhaNa',
			'township_mm' => 'မခန',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaNgaNa',
			'township_mm' => 'မငန',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaHsaNa',
			'township_mm' => 'မဆန',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaTaNa',
			'township_mm' => 'မတန',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaNaNa',
			'township_mm' => 'မနန',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaPaTa',
			'township_mm' => 'မပတ',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaPaNa',
			'township_mm' => 'မပန',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaPhaTa',
			'township_mm' => 'မဖတ',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaSaNa',
			'township_mm' => 'မစန',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaBaNa',
			'township_mm' => 'မဘန',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaMaTa',
			'township_mm' => 'မမတ',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaMaNa',
			'township_mm' => 'မမန',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaYaTa',
			'township_mm' => 'မယတ',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaRaTa',
			'township_mm' => 'မရတ',
		],
		[
			'region_id' => '13',
			'township_en' => 'MaLaNa',
			'township_mm' => 'မလန',
		],
		[
			'region_id' => '13',
			'township_en' => 'RaNgaNa',
			'township_mm' => 'ရငန',
		],
		[
			'region_id' => '13',
			'township_en' => 'RaSaNa',
			'township_mm' => 'ရစန',
		],
		[
			'region_id' => '13',
			'township_en' => 'LaKaNa',
			'township_mm' => 'လကန',
		],
		[
			'region_id' => '13',
			'township_en' => 'LaKhaTa',
			'township_mm' => 'လခတ',
		],
		[
			'region_id' => '13',
			'township_en' => 'LaKhaNa',
			'township_mm' => 'လခန',
		],
		[
			'region_id' => '13',
			'township_en' => 'LaRaNa',
			'township_mm' => 'လရန',
		],
		[
			'region_id' => '13',
			'township_en' => 'LaLaNa',
			'township_mm' => 'လလန',
		],
		[
			'region_id' => '13',
			'township_en' => 'ThaNaNa',
			'township_mm' => 'သနန',
		],
		[
			'region_id' => '13',
			'township_en' => 'ThaPaNa',
			'township_mm' => 'သပန',
		],
		[
			'region_id' => '13',
			'township_en' => 'HaTaNa',
			'township_mm' => 'ဟတန',
		],
		[
			'region_id' => '13',
			'township_en' => 'HaPaTa',
			'township_mm' => 'ဟပတ',
		],
		[
			'region_id' => '13',
			'township_en' => 'HaPaNa',
			'township_mm' => 'ဟပန',
		],
		[
			'region_id' => '13',
			'township_en' => 'AhKhaNa',
			'township_mm' => 'အခန',
		],
		[
			'region_id' => '14',
			'township_en' => 'KaKaHta',
			'township_mm' => 'ကကထ',
		],
		[
			'region_id' => '14',
			'township_en' => 'KaKaNa',
			'township_mm' => 'ကကန',
		],
		[
			'region_id' => '14',
			'township_en' => 'KaPaNa',
			'township_mm' => 'ကပန',
		],
		[
			'region_id' => '14',
			'township_en' => 'KaLaNa',
			'township_mm' => 'ကလန',
		],
		[
			'region_id' => '14',
			'township_en' => 'NgaHsaNa',
			'township_mm' => 'ငဆန',
		],
		[
			'region_id' => '14',
			'township_en' => 'NgaPaTa',
			'township_mm' => 'ငပတ',
		],
		[
			'region_id' => '14',
			'township_en' => 'NgaRaKa',
			'township_mm' => 'ငရက',
		],
		[
			'region_id' => '14',
			'township_en' => 'NgaThaKha',
			'township_mm' => 'ငသခ',
		],
		[
			'region_id' => '14',
			'township_en' => 'ZaLaNa',
			'township_mm' => 'ဇလန',
		],
		[
			'region_id' => '14',
			'township_en' => 'NyaTaNa',
			'township_mm' => 'ညတန',
		],
		[
			'region_id' => '14',
			'township_en' => 'DaDaRa',
			'township_mm' => 'ဒဒရ',
		],
		[
			'region_id' => '14',
			'township_en' => 'DhaNaPha',
			'township_mm' => 'ဓနဖ',
		],
		[
			'region_id' => '14',
			'township_en' => 'PaSaLa',
			'township_mm' => 'ပစလ',
		],
		[
			'region_id' => '14',
			'township_en' => 'PaTaNa',
			'township_mm' => 'ပတန',
		],
		[
			'region_id' => '14',
			'township_en' => 'PaThaNa',
			'township_mm' => 'ပသန',
		],
		[
			'region_id' => '14',
			'township_en' => 'PaThaRa',
			'township_mm' => 'ပသရ',
		],
		[
			'region_id' => '14',
			'township_en' => 'PhaPaNa',
			'township_mm' => 'ဖပန',
		],
		[
			'region_id' => '14',
			'township_en' => 'BaKaLa',
			'township_mm' => 'ဘကလ',
		],
		[
			'region_id' => '14',
			'township_en' => 'MaMaKa',
			'township_mm' => 'မမက',
		],
		[
			'region_id' => '14',
			'township_en' => 'MaMaNa',
			'township_mm' => 'မမန',
		],
		[
			'region_id' => '14',
			'township_en' => 'MaAhNa',
			'township_mm' => 'မအန',
		],
		[
			'region_id' => '14',
			'township_en' => 'MaAhPa',
			'township_mm' => 'မအပ',
		],
		[
			'region_id' => '14',
			'township_en' => 'RaKaNa',
			'township_mm' => 'ရကန',
		],
		[
			'region_id' => '14',
			'township_en' => 'LaPaTa',
			'township_mm' => 'လပတ',
		],
		[
			'region_id' => '14',
			'township_en' => 'LaMaNa',
			'township_mm' => 'လမန',
		],
		[
			'region_id' => '14',
			'township_en' => 'WaKhaMa',
			'township_mm' => '၀ခမ',
		],
		[
			'region_id' => '14',
			'township_en' => 'ThaNaPa',
			'township_mm' => 'သနပ',
		],
		[
			'region_id' => '14',
			'township_en' => 'HaKaKa',
			'township_mm' => 'ဟကက',
		],
		[
			'region_id' => '14',
			'township_en' => 'HaThaTa',
			'township_mm' => 'ဟသတ',
		],
		[
			'region_id' => '14',
			'township_en' => 'AhGaPa',
			'township_mm' => 'အဂပ',
		],
		[
			'region_id' => '14',
			'township_en' => 'AhMaTa',
			'township_mm' => 'အမတ',
		],
		[
			'region_id' => '14',
			'township_en' => 'AhMaNa',
			'township_mm' => 'အမန',
		]
	]
];
