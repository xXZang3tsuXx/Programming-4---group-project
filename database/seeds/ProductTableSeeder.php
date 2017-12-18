<?php
use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        Product::create([            	
        	'product_name'=>'’Hex Head Spindle',
        	'product_model'=>'Black',
        	'product_price'=>'23450LKR',
            'product_img_url'=>'http://res.cloudinary.com/dmcxtajr1/image/upload/v1513532382/10-29032011-118574L_kdhe50.gif',
            'product_3D_url'=>'https://www.traceparts.com/en/api/viewer/3d?Mode=full&Width=392&Height=340&Product=10-29032011-118574&SelectionPath=2|2|',
        ]);
        Product::create([        
        	'product_name'=>'500 DIA Bumper',
        	'product_model'=>'Black',
        	'product_price'=>'500LKR',
            'product_img_url'=>'http://res.cloudinary.com/dmcxtajr1/image/upload/v1513532939/217-5896_eouz4b.jpg',
            'product_3D_url'=>'https://www.traceparts.com/en/api/viewer/3d?Mode=full&Width=682&Height=340&Product=10-24082017-098402&SelectionPath=1|1|1|1|1|1|1|',
        ]);
        Product::create([        
        	'product_name'=>'Rod ends DIN ISO',
        	'product_model'=>'Silver',
        	'product_price'=>'440LKR',
            'product_img_url'=>'http://res.cloudinary.com/dmcxtajr1/image/upload/v1513533143/LRoYOy54GQ_ziznrt.jpg',
            'product_3D_url'=>'https://www.traceparts.com/en/api/viewer/3d?Mode=full&Width=682&Height=340&Product=10-04012011-120839&SelectionPath=2|2|2|2|2|2|2|2|2|2|2|2|2|2|2|2|2|2|',
        ]);        
        Product::create([        
            'product_name'=>'Compact positions detector switch',
            'product_model'=>'Black',
            'product_price'=>'450LKR',
            'product_img_url'=>'http://res.cloudinary.com/dmcxtajr1/image/upload/v1513533389/unnamed_ngthee.jpg',
            'product_3D_url'=>'https://www.traceparts.com/en/api/viewer/3d?Mode=full&Width=682&Height=340&Product=10-12052005-113716&SelectionPath=1|1|1|1|1|1|1|1|1|2|',
        ]);
        Product::create([        
            'product_name'=>'UNI miniature magnetic detector switch',
            'product_model'=>'Black',
            'product_price'=>'500LKR',
            'product_img_url'=>'http://res.cloudinary.com/dmcxtajr1/image/upload/v1513533536/UNI_miniature_magnetic_detector_switch_her2xc.jpg',
            'product_3D_url'=>'https://www.traceparts.com/en/api/viewer/3d?Mode=full&Width=682&Height=340&Product=10-12052005-114434&SelectionPath=1|1|1|1|1|1|1|2|',
        ]);
        Product::create([        
            'product_name'=>'44 Pull action pin',
            'product_model'=>'Black',
            'product_price'=>'100LKR',
            'product_img_url'=>'http://res.cloudinary.com/dmcxtajr1/image/upload/v1513533678/download_zcgplk.jpg',
            'product_3D_url'=>'https://www.traceparts.com/en/api/viewer/3d?Mode=full&Width=682&Height=340&Product=10-23082017-087494&SelectionPath=1|1|1|1|1|1|1|',
        ]);
        Product::create([        
            'product_name'=>'EH 24450 Machine handles',
            'product_model'=>'Silver',
            'product_price'=>'650LKR',
            'product_img_url'=>'http://res.cloudinary.com/dmcxtajr1/image/upload/v1513533808/EH_24450_Machine_handles_abk8cg.jpg',
            'product_3D_url'=>'https://www.traceparts.com/en/api/viewer/3d?Mode=full&Width=682&Height=340&Product=68-04022008-213812&SelectionPath=1|1|1|1|1|1|1|1|1|',
        ]);
        Product::create([        
            'product_name'=>'Digital position indicators',
            'product_model'=>'Red',
            'product_price'=>'350LKR',
            'product_img_url'=>'http://res.cloudinary.com/dmcxtajr1/image/upload/v1513533924/Digital_position_indicators_n7s4ow.jpg',
            'product_3D_url'=>'https://www.traceparts.com/en/api/viewer/3d?Mode=full&Width=682&Height=340&Product=10-03072013-100182&SelectionPath=1|1|1|1|1|1|1|1|',
        ]);
        
    }
}