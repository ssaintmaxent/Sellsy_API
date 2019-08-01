<?php
require_once "libs/sellsytools.php";
require_once "libs/sellsyconnect_curl.php";



//$request =  array(
//    'method' => 'Document.updateStep',
//    'params' => array (
//        'docid' => 13812621,
//        'document' => array(
//            'doctype' => "invoice",
//            'step'    => "paid" // draft = brouillon, due = A regler, payinprogress = paiement partiel, paid = payee, late = retard, cancelled = annulee
//        )
//    ),
//);
//   $request =  array(
//        'method' => 'Document.getOne',
//        'params' => array(
//            'doctype'   => 'invoice',
//            'docid'     => 11860232
//            
//        )
//    );

//    $request =  array(
//        'method' => 'Document.getPaymentList',
//        'params' => array(
//            'doctype'   => 'invoice',
//            'docid'     => 13987230
//        )
//    );

//$request =  array(
//    'method' => 'Document.createPayment',
//    'params' => array (
//        'payment' => array(
//            'date'      => time(),
//            'amount'    => '23,99',
//            'medium'    => 3025961,
//            'doctype'   => 'invoice',
//            'docid'     => 13812621,
//        )
//    )
//);

//
//$request = array(
//    'method' => 'Document.create',
//    'params' => array (
//        'document' => array (
//            'doctype'       => 'creditnote',
//            'parentid'      => 14005701,
//            'thirdid'       => 17723246,
//            'step'          =>'spent'
//        ),
//        'row' => array(
//              array(
//              "row_type"       => "shipping",
//              "row_name"       => "DHL",
//              "row_shipping"   => "DHL",
//              "row_unitAmount" => 85,
//              "row_taxid"      => 3025933
//            ),
//            array(
//                'row_type'     => 'title',
//                'row_title'    => 'Lorem<b>ipsum</b>'
//            ),
//            array(
//                'row_type'     => 'comment',
//                'row_comment'  => '<h1>Lorem</h1> ipsum <b>comment</b>.<br>Here.'
//            ),
//        )
//    )
//);
$request =  array( 
    'method' => 'Document.getList', 
    'params' => array ( 
        'doctype'    => 'invoice',		// invoice, estimate, proforma, delivery, order ou model
        'pagination' => [ 
            'nbperpage' => 50,
            'pagenum'   => 1
        ],
        "order"=>[ 
//            "direction"   => "DESC",
//            "order"       => "doc_ident"
        ],
        "search"=>[ 
//          "steps"=>[ 
//            "sent",
//            "read",
//            "accepted",
//            "refused",
//            "expired",
//            "advanced",
//            "partialinvoiced",
//            "invoiced",
//            "cancelled"
//          ],
           
    	]
    )
);

$response = sellsyconnect_curl::load()->requestApi($request);
echo '<pre>'.var_export($response, true).'</pre>';
echo '<hr>';
