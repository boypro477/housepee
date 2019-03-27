<?php
class m_product
{
    function m_product()
    {
        include_once("m_database.php");        
    }
    
    function selectAllProductTypes()
    {
        $con = new database();
        $sql = "SELECT * FROM coffee_product_types";
        $result = $con->select_all_query($sql);
        return $result;
    }
    
    function selectOneProductTypes($id)
    {
        $con = new database();
        $sql = "SELECT * FROM coffee_product_types WHERE id=".$id;
        $result = $con->select_query($sql);
        return $result;
    }
    
    function insertProductType($name=null, $description=null, $image=null)
    {
        $con = new database();
        $sql = "INSERT INTO coffee_product_types(`name`,`description`, `image`) values(";
        $sql .= "'".$name."',";
        $sql .= "'".$description."',";
        $sql .= "'".$image."')";
        $result = $con->execute_query($sql);
        return $result;
    }
    
    function updateProductType($id, $name=null, $description=null, $image=null)
    {
        $con = new database();
        $sql = "UPDATE coffee_product_types SET ";
        $sql .= "`name` = '".$name."',";
        $sql .= "`description` = '".$description."',";
        $sql .= "`image` = '".$image."'";
        $sql .= " WHERE id =".$id;

        $result = $con->execute_query($sql);
        return $result;
    }
    
    function deleteProductType($id)
    {
        $con = new database();
        $sql = "DELETE FROM coffee_product_types WHERE id = ".$id;
        $result = $con->execute_query($sql);
        return $result;
    }
    
    function selectAllProduct($productTypeId = null)
    {
        $con = new database();
        $sql = "SELECT * FROM coffee_products WHERE 1";
        if($productTypeId != null)
        {
            $sql .= " AND productTypeId = ". $productTypeId;
        }
        $result = $con->select_all_query($sql);   
     // @session_start();
        
        //  $_SESSION['check_number']=0;
        // $_SESSION['check_number'] +=1;
        return $result;

    }
    
    function selectOneProduct($productId)
    {
        $con = new database();      
        $sql = "SELECT * FROM coffee_products WHERE id = ".$productId;
        $result = $con->select_query($sql);        
        return $result;
    }
    
    function insertProduct($name=null, $description=null, $image=null, $pricesmall=null, $pricebig=null, $quantity=null, $productTypeId)
    {
        $con = new database();
        @session_start();
        $sql = "INSERT INTO coffee_products(`name`,`description`, `image`, `price-small`, `price-big`,`quantity`, `productTypeId`, `createdBy`) values(";
        $sql .= "'".$name."',";
        $sql .= "'".$description."',";
        $sql .= "'".$image."',";
        $sql .= "'".$pricesmall."',";
        $sql .= "'".$pricebig."',";
        $sql .= "'".$quantity."',";
        $sql .= "'".$productTypeId."',";
        $sql .= "'".$_SESSION['userId']."')";
        print_r($sql);
        $result = $con->execute_query($sql);
        return $result;
    }
    
    function updateProduct($id, $name=null, $description=null, $image=null, $pricesmall=null, $pricebig=null, $quantity=null, $productTypeId)
    {
        $con = new database();
        @session_start();
        $sql = "UPDATE coffee_products SET ";
        $sql .= "`name` = '".$name."',";
        $sql .= "`description` = '".$description."',";
        $sql .= "`price-small` = '".$pricesmall."',";
        $sql .= "`price-big` = '".$pricebig."',";
        $sql .= "`quantity` = '".$quantity."',";
        $sql .= "`lastModifiedBy` = '".$_SESSION['userId']."',";
        $sql .= "`productTypeId` = '".$productTypeId."',";
        $sql .= "`image` = '".$image."'";
        $sql .= " WHERE id =".$id;
        $result = $con->execute_query($sql);
        return $result;
    }
    
    function deleteProduct($id)
    {
        $con = new database();
        $sql = "DELETE FROM coffee_products WHERE id = ".$id;
        $result = $con->execute_query($sql);
        return $result;
    }
    
    function addToCart($product = array())
    {
        @session_start();
        if($_SESSION['login'] == 1)
        {
            $_SESSION['cart']['products'][] = array(
                'id' => $product['id'],
                'name' => $product['name'],
                'price-small' => $product['price-small'],
                'add-quantity-small' => $product['add-quantity-small'],
                'price-big' => $product['price-big'],
                'add-quantity-big' => $product['add-quantity-big']
            );
            $_SESSION['cart']['buying-quantities'] += $product['add-quantity-small']+$product['add-quantity-big'];
            $_SESSION['cart']['buying-total'] +=$product['add-quantity-small']*$product['price-small']+$product['price-big']*$product['add-quantity-big'];
            // $_SESSION['check_number']+=1;
            return true;
        }
        else
            return false;
    }
    function insertInvoice()
    {
        $con = new database();
        @session_start();
        if($_SESSION['cart']['buying-quantities'] > 0)
        {
            $invoiceCode = $_SESSION['id']."-".time();
            $invoicetime=date("h:i:sa");
            $sql = "INSERT INTO coffee_invoices(code,giogiaohang,id,tongtien) VALUES(";
            $sql .= "'".$invoiceCode."',";
            $sql .= "'".$invoicetime."',";
            $sql .= "'".$_SESSION['id']."',";
            $sql .= "'".$_SESSION['cart']['buying-total']."')";            
            
            if($con->execute_query($sql))
            {
                //Lấy ID của invoice vừa tạo:
                $sql1 = "SELECT id_invoices FROM coffee_invoices WHERE code = '".$invoiceCode."'";
                $invoice = $con->select_query($sql1);
                
                //Tạo các chi tiết đơn hàng:
                $sql2 = "INSERT INTO coffe_invoices_details(invoiceid, productid, quantitysmall, pricesmall, quantitybig, pricebig) VALUES";
                $i = 0;
                foreach($_SESSION['cart']['products'] as $cart)
                {
                    $i++;
                    $sql2 .= "('".$invoice['id_invoices']."','".$cart['id']."','".$cart['add-quantity-small']."','".$cart['price-small']."','".$cart['add-quantity-big']."','".$cart['price-big']."')";
                    if($i < sizeof($_SESSION['cart']['products']))
                    {
                        $sql2 .= ",";
                    }
                }
                if($con->execute_query($sql2))
                {
                    //Nếu thêm đơn hàng thành công thì phải hủy các session lưu đơn hàng tạm thời đi.
                    unset($_SESSION['cart']);
                    $_SESSION['cart']['products'] = array();
                    $_SESSION['cart']['buying-quantities'] = 0;
                    $_SESSION['cart']['buying-total']=0;
                    return true;
                }
                else return false;
                
                
            }
            
        }
    }
    
    

}


?>