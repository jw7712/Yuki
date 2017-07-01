# funkytime/yuki
A php connector for Yuki's Sales API (subset), intended to create Sales Invoices.

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
new \FunkyTime\Yuki($api_key)->ProcessInvoice($invoice);
```
