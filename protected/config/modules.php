<?php 

return  array(
		// uncomment the following to enable the Gii tool
	
		 'gii'=>array(
            'generatorPaths'=>array(
                'bootstrap.gii', // for bootstrap
				//'ext.gii',   // a model and base model
            ),
			'class'=>'system.gii.GiiModule',
			'password'=>'yiicms',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	);
?>