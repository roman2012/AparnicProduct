<?php
Croogo::hookAdminTab('Nodes/admin_add', 
        __d('aparnic_product', 'Product Properties'), 
        'AparnicProduct.product_tab_content', 
        array('type' => 'product')
);
Croogo::hookAdminTab('Nodes/admin_edit', 
        __d('aparnic_product', 'Product Properties'), 
        'AparnicProduct.product_tab_content', 
        array('type' => 'product')
);
