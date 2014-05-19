<?php
Croogo::hookBehavior('Node', 'AparnicProduct.AparnicProduct');
Croogo::hookAdminTab('Nodes/admin_add', 
        __d('aparnic_product', 'Product Properties'), 
        'AparnicProduct.admin_tab_product', 
        array('options' => array(
                'type' => 'products'
            )
        )
);
Croogo::hookAdminTab('Nodes/admin_edit', 
        __d('aparnic_product', 'Product Properties'), 
        'AparnicProduct.admin_tab_product', 
        array('options' => array(
                'type' => 'products'
            )
        )
);

Configure::write('AparnicProduct.MetaKeys', array(
    'name'
));
