<?php


namespace Sale\controller;

use Sale\model\MenuHomePage;
use Sale\model\MenuColumn;
use Sale\model\Product;
use Sale\model\ProductModel;
use Sale\model\Customers;
use Sale\model\CustomerModel;
use Sale\model\Order;
use Sale\model\OrderModel;
use Sale\model\Admin;
use Sale\model\AdminModel;
class WebController
{
    protected $menuHomePage;
    protected $menuColumn;
    protected $productModel;
    protected $orderModel;
    protected $customerModel;
    protected $order;
    protected $customer;
    protected $adminModel;
    

    public function __construct()
    {
        $this->menuHomePage = new MenuHomePage();
        $this->menuColumn = new MenuColumn();
        $this->productModel = new ProductModel();
        $this->orderModel= new OrderModel();
        $this->customerModel=new CustomerModel();
        $this->adminModel=new AdminModel();
    }

    public function homePage()
    {
        $menus = $this->menuHomePage->getAll();
        $menuColumn = $this->menuColumn->getAll();
        $products = $this->productModel->getAllProduct();
        include_once 'src/view/homepage.php';
    }

    public function showFollowMenuColumn()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $products = $this->productModel->getAllProductById($id);
            $menus = $this->menuHomePage->getAll();
            $menuColumn = $this->menuColumn->getAll();
            $menuColumnName=$this->menuColumn->getMenuNameById($id);
            if (!$menuColumnName){
                $menuColumnName='Trang chủ';
            }
            include_once 'src/view/homepage.php';
        }

    }

    public function showDetail()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $menus = $this->menuHomePage->getAll();
            $menuColumn = $this->menuColumn->getAll();
            $products = $this->productModel->getProductById($id);
            include_once 'src/view/showProduct.php';
        }
    }

    public function showMenuContent()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            if ($id == 4) {
                $menus = $this->menuHomePage->getAll();
                $menuColumn = $this->menuColumn->getAll();
                $products = $this->productModel->getAllProduct();
                include_once 'src/view/showAllProduct.php';
                return;
            }
            $menus = $this->menuHomePage->getAll();
            $menuColumn = $this->menuColumn->getAll();
            $menuContent = $this->menuHomePage->getMenuById($id);
            include_once 'src/view/showMenuContent.php';
        }
    }

    public function searchProduct()
    {
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            if ($_REQUEST['search']==null){
                $menus = $this->menuHomePage->getAll();
                $menuColumn = $this->menuColumn->getAll();
                include_once "src/view/search.php";
            }
            $name="%".$_REQUEST['search']."%";
            $products=$this->productModel->searchProductByName($name);
            $menus = $this->menuHomePage->getAll();
            $menuColumn = $this->menuColumn->getAll();
            include_once "src/view/search.php";
        }
    }

    public function addToCart()
    {
        $quantity = $_REQUEST['quantity'] ? $_REQUEST['quantity'] : 1;
        $action = $_REQUEST['action'] ? $_REQUEST['action'] : 'add';
        $id = $_REQUEST['id'] ? $_REQUEST['id'] : null;
        $products = $this->productModel->getProductById($id);
        if ($products && $action == 'add') {
            if (isset($_SESSION['cart'][$id])) {

                $_SESSION['cart'][$id]['quantity'] += $quantity;
                $_SESSION['cart'][$id]['id'] = $products[0]['id'];
                $_SESSION['cart'][$id]['name'] = $products[0]['productName'];
                $_SESSION['cart'][$id]['price'] = $products[0]['price'];
                $_SESSION['cart'][$id]['image'] = $products[0]['image'];

            } else {

                $item = [
                    'id' => $products[0]['id'],
                    'name' => $products[0]['productName'],
                    'price' => $products[0]['price'],
                    'image' => $products[0]['image'],
                    'quantity' => $quantity
                ];
                $_SESSION['cart'][$id] = $item;
            }
        } elseif ($action == 'delete') {
            if (isset($_SESSION['cart'][$id])) {
                unset($_SESSION['cart'][$id]);
            }
        } elseif ($action == 'update') {
            $quantity = $quantity >= 1 ? $quantity : 1;
            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['quantity'] = $quantity;
            }
        }elseif ($action=='clear'){
            if(isset($_SESSION['cart'])){
                unset($_SESSION['cart']);
            }
        }
        include_once "src/view/cart.php";
    }

    public function checkOut()
    {
        $checkout=$_SESSION['cart'];
        if ($checkout==null){
            $display="<h2 style='text-align: center'> Giỏ hàng bạn đang rỗng! Vui lòng thêm sản phẩm!</h2>";
            include_once "src/view/cart.php";
            return;
        }
        include_once "src/view/checkout.php";
    }

    public function getOrder()
    {
        $customerName=$_POST['name']?$_POST['name']:null;
        $customerAddress=$_POST['address']?$_POST['address']:null;
        $customerPhone=$_POST['phone']?$_POST['phone']:null;
        if ($customerName==null || $customerAddress==null || $customerPhone==null){
            echo "<h2 style='text-align: center'> Vui lòng nhập đầy đủ thông tin!</h2>";
            include_once "src/view/checkout.php";
        }else{
            if (isset($_SESSION['cart'])){
                $cart=$_SESSION['cart'];
                foreach ($cart as $item){
                    $this->customer=new Customers($customerName,$customerAddress,$customerPhone);
                    $this->customerModel->addCustomer($this->customer);
                    $this->order=new Order($item['name'],(int)$item['quantity'],$customerPhone);
                    $today=date('Y/m/d');
                    $this->orderModel->addOrder($this->order,$today);
                }
                session_destroy();
                include_once "src/view/thank.php";
            }
        }
    }

    public function login()
    {
            include_once "src/view/loginform.php";
    }

    public function loginCheck()
    {
        $adminName=$_REQUEST['admin_name']?$_REQUEST['admin_name']:null;
        $adminPass=$_REQUEST['admin_pass']?$_REQUEST['admin_pass']:null;
        $admin=new Admin($adminName,$adminPass);
        $checkAdmin=$this->adminModel->checkAdmin($admin);
        if ($checkAdmin==null){
            echo "<h2 style='text-align: center'>Sai tên đăng nhập hoặc mật khẩu!</h2>";
            include_once "src/view/loginform.php";
        }else {
            $products=$this->productModel->getAllProduct();
            include_once 'src/view/admin.php';
        }
    }

    public function adminAdd()
    {
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            include_once "src/view/adminAdd.php";
        }
        $name=$_REQUEST['name']?$_REQUEST['name']:null;
        $price=$_REQUEST['price']?$_REQUEST['price']:null;
        $image=$_REQUEST['image']?$_REQUEST['image']:null;
        $content=$_REQUEST['content']?$_REQUEST['content']:null;
        $menu=$_REQUEST['menu']?$_REQUEST['menu']:null;
        if ($name && $price && $image && $content && $menu){
            $newProduct=new Product($name,$price,$image,$content);
            $this->productModel->addProduct($newProduct,$menu);
            $products=$this->productModel->getAllProduct();
            include_once "src/view/admin.php";
        }
    }

    public function adminDelete()
    {
        $id=$_REQUEST['id'];
        $this->productModel->deleteProduct($id);
        $products=$this->productModel->getAllProduct();
        include_once "src/view/admin.php";
    }

    public function adminUpdate()
    {
        $id=$_REQUEST['id'];
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            $product=$this->productModel->getProductById($id);
            include_once "src/view/adminUpdate.php";
        }else{
            $name=$_REQUEST['name'];
            $price=$_REQUEST['price'];
            $image=$_REQUEST['image'];
            $content=$_REQUEST['content'];
            $menu=$_REQUEST['menu'];
            $newProduct=new Product($name,$price,$image,$content);
            $newProduct->setId($id);
            $this->productModel->updateProduct($newProduct,$menu);
            $products=$this->productModel->getAllProduct();
            include_once "src/view/admin.php";
        }
    }

    public function adminSearch()
    {
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $search="%".$_REQUEST['search']."%";
            $results=$this->productModel->searchProductByName($search);
            include_once "src/view/adminSearch.php";
        }

    }

    public function adminCancel()
    {
        $products=$this->productModel->getAllProduct();
        include_once "src/view/admin.php";
    }
}