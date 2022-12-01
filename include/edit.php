<?

if ($_POST['action'] == 'edit' && $_POST['table'] && $_POST['id']) {
    switch ($_POST['table']) {
        case 'category':
            $sql = "UPDATE {$_POST['table']} SET `name`=:name WHERE `id`=:id";
            $sth = $dbh->prepare($sql);
            $res = $sth->execute(array('id' => $_POST['id'], 'name' => $_POST['name']));
            break;

        case 'subcategory':
            $need_comma=false;
            $arr = array();
            $arr['id'] = $_POST['id'];
            $sql = "UPDATE {$_POST['table']} SET ";
            if ($_POST['name']) {
                $sql .= "`name`=:name";
                $arr['name'] = $_POST['name'];
            }
            // if ($_POST['name'] && $_POST['idcategory']) {
            //     $sql .= ", ";
            // }
            if ($_POST['idcategory']) {
                if ($need_comma) {
                    $sql .= ", ";
                }
                $sql .= "`id_category`=:idcategory";
                $arr['idcategory'] = $_POST['idcategory'];
            }
            // $_POST['name'] && $_POST['idcategory'] ? $sql .=", " : "";
            $sql .= " WHERE `id`=:id";
            $sth = $dbh->prepare($sql);
            $res = $sth->execute($arr);
            break;

        case 'sizes':
            $sql = "UPDATE {$_POST['table']} SET `number`=:number WHERE `id`=:id";
            $sth = $dbh->prepare($sql);
            $res = $sth->execute(array('id' => $_POST['id'], 'number' => $_POST['number']));
            break;

        case 'colors':
            $sql = "UPDATE {$_POST['table']} SET `name`=:name WHERE `id`=:id";
            $sth = $dbh->prepare($sql);
            $res = $sth->execute(array('id' => $_POST['id'], 'name' => $_POST['name']));
            break;

        case 'users':
            // 1 - action
            // 2 - table
            // 3 - id 
            $need_comma=false;
            $arr = array();
            $arr['id'] = $_POST['id'];
            $sql = "UPDATE {$_POST['table']} SET ";
            if ($_POST['fname']) {
                $sql .= "`first_name`=:fname";
                $arr['fname'] = $_POST['fname'];
                $need_comma=true;
            }
            if ($_POST['lname']) {
                if ($need_comma) {
                    $sql .= ", ";
                }
                $sql .= "`last_name`=:lname";
                $arr['lname'] = $_POST['lname'];
            }
            if ($_POST['dob']) {
                if ($need_comma) {
                    $sql .= ", ";
                }
                $sql .= "`dob`=:dob";
                $arr['dob'] = $_POST['dob'];
            }
            if ($_POST['sex']) {
                if ($need_comma) {
                    $sql .= ", ";
                }
                $sql .= "`sex`=:sex";
                $arr['sex'] = $_POST['sex'];
            }
            if ($_POST['tel']) {
                if ($need_comma) {
                    $sql .= ", ";
                }
                $sql .= "`telephone`=:tel";
                $arr['tel'] = $_POST['tel'];
            }
            if ($_POST['addr']) {
                if ($need_comma) {
                    $sql .= ", ";
                }
                $sql .= "`address`=:addr";
                $arr['addr'] = $_POST['addr'];
            }
            // $_POST['name'] && $_POST['idcategory'] ? $sql .=", " : "";
            $sql .= " WHERE `id`=:id";
            $sth = $dbh->prepare($sql);
            $res = $sth->execute($arr);
            break;

            case 'products':
                // 1 - action
                // 2 - table
                // 3 - id 
                $need_comma=false;
                $arr = array();
                $arr['id'] = $_POST['id'];
                $sql = "UPDATE {$_POST['table']} SET ";
                if ($_POST['category']) {
                    $sql .= "`id_category`=:category";
                    $arr['category'] = $_POST['category'];
                    $need_comma=true;
                }
                if ($_POST['subcategory']) {
                    if ($need_comma) {
                        $sql .= ", ";
                    }
                    $sql .= "`id_subcategory`=:subcategory";
                    $arr['subcategory'] = $_POST['subcategory'];
                }
                if ($_POST['size']) {
                    if ($need_comma) {
                        $sql .= ", ";
                    }
                    $sql .= "`id_size`=:size";
                    $arr['size'] = $_POST['size'];
                }
                if ($_POST['color']) {
                    if ($need_comma) {
                        $sql .= ", ";
                    }
                    $sql .= "`id_color`=:color";
                    $arr['color'] = $_POST['color'];
                }
                if ($_POST['name']) {
                    if ($need_comma) {
                        $sql .= ", ";
                    }
                    $sql .= "`name`=:name";
                    $arr['name'] = $_POST['name'];
                }
                if ($_POST['description']) {
                    if ($need_comma) {
                        $sql .= ", ";
                    }
                    $sql .= "`description`=:description";
                    $arr['description'] = $_POST['description'];
                }
                if ($_POST['price']) {
                    if ($need_comma) {
                        $sql .= ", ";
                    }
                    $sql .= "`price`=:price";
                    $arr['price'] = $_POST['price'];
                }
                if ($_POST['discount']) {
                    if ($need_comma) {
                        $sql .= ", ";
                    }
                    $sql .= "`discount`=:discount";
                    $arr['discount'] = $_POST['discount'];
                }
                if ($_POST['count']) {
                    if ($need_comma) {
                        $sql .= ", ";
                    }
                    $sql .= "`count`=:count";
                    $arr['count'] = $_POST['count'];
                }
                // $_POST['name'] && $_POST['idcategory'] ? $sql .=", " : "";
                $sql .= " WHERE `id`=:id";
                $sth = $dbh->prepare($sql);
                $res = $sth->execute($arr);
                break;
        
                case 'users':
                    // 1 - action
                    // 2 - table
                    // 3 - id 
                    $need_comma=false;
                    $arr = array();
                    $arr['id'] = $_POST['id'];
                    $sql = "UPDATE {$_POST['table']} SET ";
                    if ($_POST['uid']) {
                        $sql .= "`id_user`=:uid";
                        $arr['uid'] = $_POST['uid'];
                        $need_comma=true;
                    }
                    if ($_POST['pid']) {
                        if ($need_comma) {
                            $sql .= ", ";
                        }
                        $sql .= "`id_product`=:pid";
                        $arr['pid'] = $_POST['pid'];
                    }
                    if ($_POST['sid']) {
                        if ($need_comma) {
                            $sql .= ", ";
                        }
                        $sql .= "`id_size`=:sid";
                        $arr['sid'] = $_POST['sid'];
                    }
                    if ($_POST['cid']) {
                        if ($need_comma) {
                            $sql .= ", ";
                        }
                        $sql .= "`id_color`=:cid";
                        $arr['cid'] = $_POST['cid'];
                    }
                    if ($_POST['count']) {
                        if ($need_comma) {
                            $sql .= ", ";
                        }
                        $sql .= "`count`=:count";
                        $arr['count'] = $_POST['count'];
                    }
                    $sql .= " WHERE `id`=:id";
                    $sth = $dbh->prepare($sql);
                    $res = $sth->execute($arr);
                    break;
    }
    print_r($arr);
    if ($res) {
        echo 'Запись отредактирована!';
    } else {
        echo 'Не удалось отредактировать запись';
    }
}






?>