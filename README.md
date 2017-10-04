# funkytime/yuki
A php connector for Yuki's Sales and Accounting API (subsets), intended to create Sales Invoices and get back payment status.

```php
$invoice = [
    'Reference' => '',
    // ...
    'Contact' => [
        'ContactCode' => '',
        // ...
    ]
    'ContactPerson' => ['FullName' => ''],
    'InvoiceLines' => [
        'InvoiceLine' => [
            'ProductQuantity' => '',
            'Product' => [
                'Description' => '',
                // ...
            ]
        ]
    ]
    ];
];
$YukiSales = new \FunkyTime\Yuki($api_key, 'sales');
$YukiSales->ProcessInvoice($invoice);
```

```php
$YukiAccounting = new \FunkyTime\Yuki($api_key, 'accounting');
$status = $YukiAccounting->GetInvoiceBalance($inv_reference);
// Result: an array with keys 'openAmount' and 'originalAmount' 
```
