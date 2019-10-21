<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Brand;
use App\Customer;
use App\Product;
use App\Favourite;
use App\Phone;
use App\Category;
use App\Sub_Category;
use App\Description;
use App\Gender;
use App\Payment;
use App\Order;
use App\ProdOrder;
use App\Transaction;
use App\Delivery;
use App\DeliveryRate;
use App\BrandRate;
use App\CustomerService;
use App\Chat;
use App\Message;
use App\DeliveryImage;
use App\Cart;
use DB;

class manage extends Controller
{
	public function ShowDataAdmin(){
		$getAdmin = Admin::all();
		return response()->json($getAdmin);
	}
	public function ShowDataAdminById($id){
		$getAdmin = Admin::find($id);
		return response()->json($getAdmin);
	}
	public function ShowDataBrands(){
		$getBrand = Brand::all();
		$array = array('getBrand' => $getBrand);
		//return response()->json($getBrand);
		return view('Brands' , $array);
	}
	public function ShowDataBrandsById($id){
		$getBrand = Brand::find($id);
		return response()->json($getBrand);
	}
	/*public function ShowDataCustomersById($id){
		$getCustomerId = Customer::find($id);
		return response()->json($getCustomerId);
	}*/
	public function ShowDataCustomers(){
		$getCustomerAll = Customer::all();
		//return response()->json($getCustomerId);
	      $arr = array('getCustomerAll' => $getCustomerAll);
	      return view('customers' , $arr);
	}
	public function ShowDataProductsById($id){
		$getProduct = Product::find($id);
		return response()->json($getProduct);
	}
	public function ShowDataProducts(){
		$getProduct = Product::all();
		return response()->json($getProduct);
	}
	public function ShowDataFavouritesById($id){
		$getFavourite = Favourite::find($id);
		return response()->json($getFavourite);
	}
	public function ShowDataFavourites(){
		$getFavourite = Favourite::all();
		return response()->json($getFavourite);
	}
	public function ShowDataPhonesById($id){
		$getPhones = Phone::find($id);
		return response()->json($getPhones);
	}
	public function ShowDataPhones(){
		$getPhones = Phone::all();
		return response()->json($getPhones);
	}
	public function ShowDataCategoryById($id){
		$getCategory = Category::find($id);
		return response()->json($getCategory);
	}
	public function ShowDataCategory(){
		$getCategory = Category::all();
		return response()->json($getCategory);
	}
	public function ShowDataSub_CategoryById($id){
		$getSub_Category = Sub_Category::find($id);
		return response()->json($getSub_Category);
	}
	public function ShowDataSub_Category(){
		$getSub_Category = Sub_Category::all();
		return response()->json($getSub_Category);
	}
	public function ShowDataDescriptionById($id){
		$getDescription = Description::find($id);
		return response()->json($getDescription);
	}
	public function ShowDataDescription(){
		$getDescription = Description::all();
		return response()->json($getDescription);
	}
	public function ShowDataGenderById($id){
		$getGender = Gender::find($id);
		return response()->json($getGender);
	}
	public function ShowDataGender(){
		$getGender = Gender::all();
		return response()->json($getGender);
	}
	public function ShowDataPaymentById($id){
		$getPayment = Payment::find($id);
		return response()->json($getPayment);
	}
	public function ShowDataPayment(){
		$getPayment = Payment::all();
		return response()->json($getPayment);
	}
	public function ShowDataOrderById($id){
		$getOrder = Order::find($id);
		return response()->json($getOrder);
	}
	public function ShowDataOrder(){
		$getOrder = Order::all();
		return response()->json($getOrder);
	}
	public function ShowDataProdOrderById($id){
		$getprodOrder = ProdOrder::find($id);
		return response()->json($getprodOrder);
	}
	public function ShowDataProdOrder(){
		$getprodOrder = ProdOrder::all();
		return response()->json($getprodOrder);
	}
	public function ShowDataTransactionById($id){
		$getTransaction = Transaction::find($id);
		return response()->json($getTransaction);
	}
	public function ShowDataTransaction(){
		$getTransaction = Transaction::all();
		return response()->json($getTransaction);
	}
	public function ShowDataDeliveryById($id){
		$getDelivery = Delivery::find($id);
		return response()->json($getDelivery);
	}
	public function ShowDataDelivery(){
		$getDelivery = Delivery::all();
		return response()->json($getDelivery);
	}
	public function ShowDataDeliveryRateById($id){
		$getDeliveryRate = DeliveryRate::find($id);
		return response()->json($getDeliveryRate);
	}
	public function ShowDataDeliveryRate(){
		$getDeliveryRate = DeliveryRate::all();
		return response()->json($getDeliveryRate);
	}
	public function ShowDataBrandRateById($id){
		$getBrandRate = BrandRate::find($id);
		return response()->json($getBrandRate);
	}
	public function ShowDataBrandRate(){
		$getBrandRate = BrandRate::all();
		return response()->json($getBrandRate);
	}
	public function ShowDataCustomerServiceById($id){
		$getCustomerService = CustomerService::find($id);
		return response()->json($getCustomerService);
	}
	public function ShowDataCustomerService(){
		$getCustomerService = CustomerService::all();
		return response()->json($getCustomerService);
	}
	public function ShowDataChatById($id){
		$getChat = Chat::find($id);
		return response()->json($getChat);
	}
	public function ShowDataChat(){
		$getChat = Chat::all();
		return response()->json($getChat);
	}
	public function ShowDataMessageById($id){
		$getMessage = Message::find($id);
		return response()->json($getMessage);
	}
	public function ShowDataMessage(){
		$getMessage = Message::all();
		return response()->json($getMessage);
	}
	public function ShowDataDeliveryImageById($id){
		$getDeliveryImage = DeliveryImage::find($id);
		return response()->json($getDeliveryImage);
	}
	public function ShowDataDeliveryImage(){
		$getDeliveryImage = DeliveryImage::all();
		return response()->json($getDeliveryImage);
	}
	public function ShowCartById($id){
		$getCart = Cart::find($id);
		return response()->json($getCart);
	}
	public function ShowCart(){
		$getCart = Cart::all();
		return response()->json($getCart);
	}

	public function getAdminPage(){
		return view('AdminLogin');
	}

	public function ValidateAdmin(){
      //$remember = (request()->has('remember'))? true : false;
      if(auth()->guard('adminGuard')->attempt(['username' => request('username') , 'password' => request('password')])){
        return redirect('welcome/Admin/' . auth()->guard('adminGuard')->user()->admin_id);
      }else{
        return back();
      }
    }

    public function getCustomersPage(){
    	return view('customers');
    }

    public function getBrandsPage(){
    	return view('Brands');
    }

    public function getProductsPage(){
    	return view('Products');
    }

    public function getOrdersPage(){
    	return view('orders');
    }


	public function InsertAdmin(Request $request){
		$ins = new Admin();
		$ins->email = $request->input('email');
		$ins->password = $request->input('password');
		$ins->save();
		return response()->json(['message' => 'Admin Added Successfully']);
	}
	public function UpdateAdmin(Request $request , $id){
		$updadmin = Admin::find($id);
		$updadmin->email = $request->input('email');
		$updadmin->password = $request->input('password');
		$updadmin->save();
		return response()->json(['message' => 'Admin Updated Successfully']);
	}
	public function DeleteAdmin($id){
		$delAdmin = Admin::find($id);
		$delAdmin->delete();
		return response()->json(['message' => 'Admin Deleted Successfully']);
	}

	public function getPageBrand($id){
		$getBrandPage = Brand::find($id);
		return view('EditBrand');
	}

	public function InsertBrand(Request $request){
		$insBrand = new Brand();
		$insBrand->name = $request->input('name');
		$insBrand->username = $request->input('username');
		$insBrand->password = $request->input('password');
		$insBrand->email = $request->input('email');
		$insBrand->branch = $request->input('branch');
		$insBrand->phone_id = $request->input('phone_id');
		$insBrand->admin_id = $request->input('admin_id');

		$insBrand->save();
		//return response()->json(['message' => 'Brand Added Successfully']);
		return redirect('/Brands');
	}
	public function UpdateBrand(Request $request , $id){
		$updBrand = Brand::find($id);
		$updBrand->name = $request->input('name');
		$updBrand->username = $request->input('username');
		$updBrand->password = $request->input('password');
		$updBrand->email = $request->input('email');
		$updBrand->branch = $request->input('branch');
		$updBrand->phone_id = $request->input('phone_id');
		$updBrand->admin_id = $request->input('admin_id');

		$updBrand->save();
		//return response()->json(['message' => 'Brand Updated Successfully']);
		return redirect ('/Brands');
	}
	public function DeleteBrand($id){
		$delBrand = Brand::find($id);
		$delBrand->delete();
		return response()->json(['message' => 'Brand Deleted Successfully']);
	}
	public function searchBrand($brand_name){
		$getResult = DB::table('brand')
       ->select('*')
       ->where('name', $brand_name)
       ->get();
       return response()->json($getResult);
	}

	public function GetUpdateCustomerPage($id){
		$getIdCustomer = Customer::find($id);
		return view ('EditCustomer');
	}

	public function InsertCustomer(Reqauest $request){
		$insCustomer = new Customer();
		$insCustomer->Full_name = $request->input('Full_name');
		$insCustomer->user_name = $request->input('user_name');
		$insCustomer->password = $request->input('password');
		$insCustomer->email = $request->input('email');
		$insCustomer->address = $request->input('address');
		$insCustomer->phone_id = $request->input('phone_id');
		$insCustomer->Date_Of_Birth = $request->input('Date_Of_Birth');
		$insCustomer->gender_id = $request->input('gender_id');
		$insCustomer->admin_id = $request->input('admin_id');

		$insCustomer->save();
		return redirect('/customers');
		//return response()->json($insCustomer);
	}

	public function UpdateCustomer(Request $request , $id){
		$updCustomer = Customer::find($id);
		$updCustomer->Full_name = $request->input('Full_name');
		$updCustomer->user_name = $request->input('user_name');
		$updCustomer->password = $request->input('password');
		$updCustomer->email = $request->input('email');
		$updCustomer->address = $request->input('address');
		$updCustomer->phone_id = $request->input('phone_id');
		$updCustomer->Date_Of_Birth = $request->input('Date_Of_Birth');
		$updCustomer->gender_id = $request->input('gender_id');
		$updCustomer->admin_id = $request->input('admin_id');

		$updCustomer->save();
		return redirect('/customers');
	}
	public function DeleteCustomer($id){
		$delCustomer = Customer::find($id);
		$delCustomer->delete();
		return response()->json(['message' => 'Customer Deleted Successfully']);
		//return redirect ('/customers');
	}
	 public function getAccount($username){
	  $getResult = DB::table('customer')
      ->select('*')
      ->where('user_name', $username)
      ->get();
       return response()->json($getResult);
	 }
	public function InsertProduct(Request $request){
		$insProduct = new Product();
		
		$insProduct->product_name = $request->input('product_name');
		$insProduct->available = $request->input('available');
		$insProduct->discount = $request->input('discount');
		$insProduct->customer_id = $request->input('customer_id');
		$insProduct->image_id = $request->input('image_id');
		$insProduct->brand_id = $request->input('brand_id');

		$insProduct->save();
		return response()->json(['message' => 'Product Added Successfully']);
	}
	public function UpdateProduct(Request $request , $id){
		$updProduct = Product::find($id);

		$updProduct->product_name = $request->input('product_name');
		$updProduct->available = $request->input('available');
		$updProduct->discount = $request->input('discount');
		$updProduct->customer_id = $request->input('customer_id');
		$updProduct->image_id = $request->input('image_id');
		$updProduct->brand_id = $request->input('brand_id');

		$updProduct->save();
		return response()->json(['message' => 'Product Updated Successfully']);
	}
	public function DeleteProduct($id){
		$delProduct = Product::find($id);
		$delProduct->delete();
		return response()->json(['message' => 'Product Deleted Successfully']);
	}
	
	public function SearchProduct(Request $request , $product_id , $product_name , $available , $discount , $customer_id , $brand_id){
	    $getSerach = Product::find($product_id)->where('product_name' , 'LIKE' , $product_name)
	    ->Where('available' , 'LIKE' , $available)
	    ->Where('discount' , 'LIKE' , $discount)
	    ->Where('customer_id' , 'LIKE' , $customer_id)
	    ->Where('brand_id' , 'LIKE' , $brand_id)
	    ->get();
	    /*$articles = Article::search('Star Trek')->where('views', '>', 100)->get();
        $articles = Article::search('Star Trek')->where('created_at', '>=', now()->subDays(7))->get();
		$articles = Article::search('Star Trek')->where('views', 100)->get(); // views = 100*/
	    /*$data = $request->get('data');
	    $serProduct = Product::where('product_name', 'LIKE', '%'.$product_name.'%')
         ->orWhere('available', 'LIKE', '%'.$available.'%')
         ->orWhere('discount', 'LIKE', '%'.$discount.'%')
         ->orWhere('customer_id', 'LIKE', '%'.$customer_id.'%')
         ->orWhere('brand_id', 'LIKE', '%'.$brand_id.'%')
         ->get();
	    return response()->json(['data' => $serProduct]);
	    */
	    return response()->json($getSerach);
	}
	public function serachProduct2($product_name){
	$getResult = DB::table('product')
    ->select('product_name')
    ->where('product_name','LIKE', '%'.$product_name.'%')
    ->get();
    return response()->json($getResult);
	}
	public function searchByTags($subcategory_id){
	$res=DB::table('product')
    ->join('sub_category','product.product_id','=','sub_category.subcategory_id')
    ->where('product.product_id','=', $subcategory_id)
    ->get();

    return response()->json($res);
	}
	public function getProductForCustomer($customer_id){
	$getResult = DB::table('product')
    ->select('*')
    ->where('customer_id', $customer_id)
    ->get();
    return response()->json($getResult);
	}
	public function getProductForBrand($brand_id){
	$getResult = DB::table('product')
    ->select('*')
    ->where('brand_id', $brand_id)
    ->get();
    return response()->json($getResult);
	}

	//Newest Product
	public function sortProductByDate($date1 , $date2){
		$getResult = DB::table('product')
		->select('*')
		->whereBetween('Date' , [$date1 , $date2])
		->orderBy('Date' , 'desc')
		->get();

		return response()->json($getResult);
	}
	public function getProducthasHotDeals($hotdeals){
		$getResult = DB::table('description')
		->select('product_name' , 'price' , 'hot_deals')
		->join('product' , 'description.product_id' , 'product.product_id')
		->where('hot_deals' , '=' , $hotdeals)
		->get();
		return response()->json($getResult);
	}
	public function getProductsForCategory($category_id){
		$getResult = DB::table('description')
		->select('description.category_id' , 'description.product_id' , 'product.product_name')
		->join('category' , 'description.category_id' , 'category.category_id')
		->join('product' , 'description.product_id' , 'product.product_id')
		->where('category.category_id' , '=' , $category_id)
		->get();

		return response()->json($getResult);
	}
	public function InsertFavourite(Request $request){
		$insFavourite = new Favourite();

		$insFavourite->customer_id = $request->input('customer_id');
		$insFavourite->product_id = $request->input('product_id');

		$insFavourite->save();
		return response()->json(['message' => 'Favourite Added Successfully']);
	}
	public function UpdateFavourite(Request $request , $id){
		$updFavourite = Favourite::find($id);

		$updFavourite->customer_id = $request->input('customer_id');
		$updFavourite->product_id = $request->input('product_id');

		$updFavourite->save();
		return response()->json(['message' => 'Favourite Updated Successfully']);
	}
	public function DeleteFavourite($id){
		$delFavourite = Favourite::find($id);
		$delFavourite->delete();
		return response()->json(['message' => 'Favourite Deleted Successfully']);
	}
	public function InsertPhone(Request $request){
		$insPhone = new Phone();

		$insPhone->phone = $request->input('phone');

		$insPhone->save();
		return response()->json(['message' => 'Phone Added Successfully']);
	}
	public function UpdatePhone(Request $request , $id){
		$updPhone = Phone::find($id);

		$updPhone->phone = $request->save();
		$updPhone->save();
		return response()->json(['message' => 'Phone Updated Successfully']);
	}
	public function DeletePhone($id){
		$delPhone = Phone::find($id);

		$delPhone->delete();
		return response()->json(['message' => 'Phone Deleted Successfully']);
	}
	public function InsertDescription(Request $request){
		$insDescription = new Description();

		$insDescription->color = $request->input('color');
		$insDescription->size = $request->input('size');
		$insDescription->material = $request->input('material');
		$insDescription->hot_deals = $request->input('hot_deals');
		$insDescription->price = $request->input('price');
		$insDescription->category_id = $request->input('category_id');
		$insDescription->sub_category_id = $request->input('sub_category_id');
		$insDescription->product_id = $request->input('product_id');
		$insDescription->brand_name = $request->input('brand_name');
		
		$insDescription->save();
		return response()->json(['message' => 'Description Added Successfully']);
	}
	public function UpdateDescription(Request $request , $id){
		$updDescription = Description::find($id);

		$updDescription->color = $request->input('color');
		$updDescription->size = $request->input('size');
		$updDescription->material = $request->input('material');
		$updDescription->hot_deals = $request->input('hot_deals');
		$updDescription->price = $request->input('price');
		$updDescription->category_id = $request->input('category_id');
		$updDescription->sub_category_id = $request->input('sub_category_id');
		$updDescription->product_id = $request->input('product_id');
		$updDescription->brand_name = $request->input('brand_name');
		
		$updDescription->save();
		return response()->json(['message' => 'Description Updated Successfully']);	
	}
	public function DeleteDescription($id){
		$delDescription = Description::find($id);
		$delDescription->delete();
		return response()->json(['message' => 'Description Deleted Successfully']);
	}
	public function getDescriptionByProduct($product_id){
	$res=DB::table('description')
    ->join('product','description.product_id','=','product.product_id')
    ->where('description.product_id','=',$product_id)->get();

    return response()->json($res);
	}
	public function getDescriptionByCategory($category_id){
	$getResult = DB::table('description')
	->join('category' , 'description.category_id' , '=' , 'category.category_id')
    ->where('description.category_id', '=' ,$category_id)
    ->get();
    return response()->json($getResult);
	}
	public function sortPriceHighToLow(){
		$getResult = DB::table('description')
		->select('product_name' , 'price')
		->join('product' , 'description.product_id' , 'product.product_id')
		->orderBy('price' , 'desc')
		->get();
		return response()->json($getResult);
	}
	public function sortPriceLowToHigh(){
		$getResult = DB::table('description')
		->select('product_name' , 'price')
		->join('product' , 'description.product_id' , 'product.product_id')
		->orderBy('price' , 'asc')
		->get();
		return response()->json($getResult);
	}
	public function searchByAll($color , $size , $material , $hot_deals , $price , $category_id , $sub_category_id , $brand_name){

		$getResult = DB::table('description')
        ->select('product.*')
        ->join('product' , 'description.product_id' , 'Product.product_id')
        ->orWhere('description.color','=', $color)
        ->orWhere('description.size' , '=' , $size)
        ->orWhere('description.material' , '=' , $material)
        ->orWhere('description.hot_deals' , '=' , $hot_deals)
        ->orWhere('description.price' , '=' , $price)
        ->orWhere('description.category_id' , '=' , $category_id)
        ->orWhere('description.sub_category_id' , '=' , $sub_category_id)
        ->orWhere('description.brand_name' , '=' , $brand_name)
        ->get();

        return response()->json($getResult);
	}
	public function searchbySub_Category($subcategory_id){
		$getResult = DB::table('product')
		->select('name' , 'product.*')
		->join('sub_category' , 'product.subcategory_id' , 'sub_category.subcategory_id')
		->where('product.subcategory_id' , '=' , $subcategory_id)
		->get();

		return response()->json($getResult);
	}
	/*
	public function searchBySize($size){
		$getSerach = DB::table('description')
		->select('size')
		->where()
	}
	*/
	public function InsertGender(Request $request){
		$insGender = new Gender();

		$insGender->gender_name = $request->input('gender_name');
		$insGender->save();
		return response()->json(['message' => 'Gender Added Successfully']);
	}
	public function UpdateGender(Request $request , $id){
		$updGender = Gender::find($id);

		$updGender->gender_name = $request->input('gender_name');
		$updGender->save();
		return response()->json(['message' => 'Gender Updated Successfully']);
	}
	public function DeleteGender($id){
		$delGender = Gender::find($id);

		$delGender->delete();
		return response()->json(['message' => 'Gender Deleted Successfully']);
	}
	public function InsertPayment(Request $request){
		$insPayment = new Payment();

		$insPayment->payment_name = $request->input('payment_name');
		$insPayment->save();
		return response()->json(['message' => 'Payment Added Successfully']);
	}
	public function UpdatePayment(Request $request , $id){
		$updPayment = Payment::find($id);
		$updPayment->payment_name = $request->input('payment_name');
		$updPayment->save();
		return response()->json(['message' => 'Payment Updated Successfully']);
	}
	public function DeletePayment($id){
		$delPayment = Payment::find($id);
		$delPayment->delete();
		return response()->json(['message' => 'Payment Deleted Successfully']);
	}
	public function InsertOrder(Request $request){
		$insOrder = new Order();

		$insOrder->total_price = $request->input('total_price');
		$insOrder->placed = $request->input('placed');
		$insOrder->date = $request->input('date');
		$insOrder->customer_id = $request->input('customer_id');
		$insOrder->payment_id = $request->input('payment_id');
		$insOrder->save();
		return response()->json(['message' => 'Order Added Successfully']);
	}
	public function UpdateOrder(Request $request , $id){
		$updOrder = Order::find($id);

		$updOrder->total_price = $request->input('total_price');
		$updOrder->placed = $request->input('placed');
		$updOrder->date = $request->input('date');
		$updOrder->customer_id = $request->input('customer_id');
		$updOrder->payment_id = $request->input('payment_id');
		$updOrder->save();
		return response()->json(['message' => 'Order Updated Successfully']);
	}
	public function DeleteOrder($id){
		$delOrder = Order::find($id);
		$delOrder->delete();
		return response()->json(['message' => 'Order Deleted Successfully']);
	}
	public function getOrderForCustomer($customer_id){
	$getResult = DB::table('orders')
    ->select('*')
    ->where('customer_id', $customer_id)
    ->get();
    return response()->json($getResult);
	}
	public function getOrderForPayment($payment_id){
	$getResult = DB::table('orders')
    ->select('*')
    ->where('payment_id', $payment_id)
    ->get();
    return response()->json($getResult);
	}
	public function InsertProdOrder(Request $request){
		$insProdOrder = new ProdOrder();

		$insProdOrder->order_id = $request->input('order_id');
		$insProdOrder->product_id = $request->input('product_id');
		$insProdOrder->save();
		return response()->json(['message' => 'ProdOrder Added Successfully']);
	}
	public function UpdateProdOrder(Request $request , $id){
		$updProdOrder = ProdOrder::find($id);

		$updProdOrder->order_id = $request->input('order_id');
		$updProdOrder->product_id = $request->input('product_id');

		$updProdOrder->save();
		return response()->json(['message' => 'ProdOrder Updated Successfully']);
	}
	public function DeleteProdOrder($id){
		$delProdOrder = ProdOrder::find($id);
		$delProdOrder->delete();
		return response()->json(['message' => 'ProdOrder Deleted Successfully']);
	}
	public function InsertTransaction(Request $request){
		$insTran = new Transaction();

		$insTran->bank = $request->input('bank');
		$insTran->delivery = $request->input('delivery');
		$insTran->brand = $request->input('brand');
		$insTran->closet = $request->input('closet');
		$insTran->order_id = $request->input('order_id');
		$insTran->payment_id = $request->input('payment_id');
		$insTran->bank_status = $request->input('bank_status');
		$insTran->delivery_status = $request->input('delivery_status');
		$insTran->brand_status = $request->input('brand_status');

		$insTran->save();
		return response()->json(['message' => 'Transaction Added Successfully']);
	}
	public function UpdateTransaction(Request $request , $id){
		$updTran = Transaction::find($id);

		$updTran->bank = $request->input('bank');
		$updTran->delivery = $request->input('delivery');
		$updTran->brand = $request->input('brand');
		$updTran->closet = $request->input('closet');
		$updTran->order_id = $request->input('order_id');
		$updTran->payment_id = $request->input('payment_id');
		$updTran->bank_status = $request->input('bank_status');
		$updTran->delivery_status = $request->input('delivery_status');
		$updTran->brand_status = $request->input('brand_status');

		$updTran->save();
		return response()->json(['message' => 'Transaction Updated Successfully']);
	}
	public function DeleteTransaction($id){
		$delTran = Transaction::find($id);
		$delTran->delete();
		return response()->json(['message' => 'Transaction Deleted Successfully']);
	}
	public function getTransactionByOrder($order_id){
	$res = DB::table('transactions')
    ->join('orders','transactions.order_id','=','orders.order_id')
    ->where('transactions.order_id','=' , $order_id)->get();

    return response()->json($res);
	}
	public function getTransactionByPayment($payment_id){
	$res = DB::table('transactions')  
	->join('payment' , 'transactions.payment_id' , '=' , 'payment.payment_id')
	->where('transactions.payment_id' , '=' , $payment_id)
	->get();
	return response()->json($res);
	}
	public function InsertDelivery(Request $request){
		$insdel = new Delivery();

		$insdel->order_id = $request->input('order_id');
		
		$insdel->save();
		return response()->json(['message' => 'Delivery Added Successfully']);
	}
	public function UpdateDelivery(Request $request , $id){
		$upddel = Delivery::find($id);

		$upddel->order_id = $request->input('order_id');

		$upddel->save();
		return response()->json(['message' => 'Delivery Updated Successfully']);
	}
	public function DeleteDelivery($id){
		$deldel = Delivery::find($id);
		$deldel->delete();
		return response()->json(['message' => 'Delivery Deleted Successfully']);
	}
	public function InsertDeliveryRate(Request $request){
		$insdelrate = new DeliveryRate();

		$insdelrate->customer_id = $request->input('customer_id');
		$insdelrate->order_id = $request->input('order_id');
		$insdelrate->rate = $request->input('rate');
		
		$insdelrate->save();
		return response()->json(['message' => 'DeliveryRate Added Successfully']);
	}
	public function UpdateDeliveryRate(Request $request , $id){
		$upddelrate = DeliveryRate::find($id);
		
		$upddelrate->customer_id = $request->input('customer_id');
		$upddelrate->order_id = $request->input('order_id');
		$upddelrate->rate = $request->input('rate');

		$upddelrate->save();
		return response()->json(['message' => 'DeliveryRate Updated Successfully']);
	}
	public function DeleteDeliveryRate($id){
		$deldelrate = DeliveryRate::find($id);
		$deldelrate->delete();
		return response()->json(['message' => 'DeliveryRate Deleted Successfully']);
	}
	public function InsertBrandRate(Request $request){
		$insdelbrarate = new BrandRate();

		$insbrarate->customer_id = $request->input('customer_id');
		$insbrarate->brand_id = $request->input('brand_id');
		$insbrarate->rate = $request->input('rate');
		
		$insbrarate->save();
		return response()->json(['message' => 'BrandRate Added Successfully']);
	}
	public function UpdateBrandRate(Request $request , $id){
		$updbrarate = BrandRate::find($id);
		
		$updbrarate->customer_id = $request->input('customer_id');
		$updbrarate->brand_id = $request->input('brand_id');
		$updbrarate->rate = $request->input('rate');

		$updbrarate->save();
		return response()->json(['message' => 'BrandRate Updated Successfully']);
	}
	public function DeleteBrandRate($id){
		$delbrarate = BrandRate::find($id);
		$delbrarate->delete();
		return response()->json(['message' => 'BrandRate Deleted Successfully']);
	}
	public function InsertCustomerService(){
		$inscusser = new CustomerService();

		$inscusser->username = $request->input('username');
		$inscusser->password = $request->input('password');

		$inscusser->save();
		return response()->json(['message' => 'CustomerService Added Successfully']);
	}
	public function UpdateCustomerService(Request $request , $id){
		$updcusser = CustomerService::find($id);
		
		$updcusser->username = $request->input('username');
		$updcusser->password = $request->input('password');

		$updcusser->save();
		return response()->json(['message' => 'CustomerService Updated Successfully']);
	}
	public function DeleteCustomerService($id){
		$delcusser = CustomerService::find($id);
		$delcusser->delete();
		return response()->json(['message' => 'CustomerService Deleted Successfully']);
	}
	public function InsertChat(Request $request){
		$insch = new Chat();

		$insch->customer_id = $request->input('customer_id');
		$insch->customerService_id = $request->input('customerService_id');

		$insch->save();
		return response()->json(['message' => 'Chat Added Successfully']);
	}
	public function UpdateChat(Request $request , $id){
		$updch = Chat::find($id);
		
		$updch->customer_id = $request->input('customer_id');
		$updch->customerService_id = $request->input('customerService_id');

		$updch->save();
		return response()->json(['message' => 'Chat Updated Successfully']);
	}
	public function DeleteChat($id){
		$delch = Chat::find($id);
		$delch->delete();
		return response()->json(['message' => 'Chat Deleted Successfully']);
	}
	public function InsertMessage(Request $request){
		$insmess = new Message();

		$insmess->content = $request->input('cntent');
		$insmess->type = $request->input('type');
		$insmess->chat_id = $request->input('chat_id');
		$insmess->date = $request->input('date');

		$insmess->save();
		return response()->json(['message' => 'Message Added Successfully']);
	}
	public function UpdateMessage(Request $request , $id){
		$updmess = Message::find($id);
		
		$updmess->content = $request->input('cntent');
		$updmess->type = $request->input('type');
		$updmess->chat_id = $request->input('chat_id');
		$updmess->date = $request->input('date');

		$updmess->save();
		return response()->json(['message' => 'Message Updated Successfully']);
	}
	public function DeleteMessage($id){
		$delmess = Message::find($id);
		$delmess->delete();
		return response()->json(['message' => 'Message Deleted Successfully']);
	}
	public function InsertDeliveryImage(Request $request){
		$insdelimg = new DeliveryImage();

		$insdelimg->image = $request->input('image');
		$insdelimg->order_id = $request->input('order_id');

		$insdelimg->save();
		return response()->json(['message' => 'DeliveryImage Added Successfully']);
	}
	public function UpdateDeliveryImage(Request $request , $id){
		$upddelimg = DeliveryImage::find($id);
		
		$upddelimg->image = $request->input('image');
		$upddelimg->order_id = $request->input('order_id');

		$upddelimg->save();
		return response()->json(['message' => 'DeliveryImage Updated Successfully']);
	}
	public function DeleteDeliveryImage($id){
		$deldelimg = DeliveryImage::find($id);
		$deldelimg->delete();
		return response()->json(['message' => 'DeliveryImage Deleted Successfully']);
	}
	public function InsertCart(Request $request){
		$inscar = new Cart();

		$inscar ->customer_id = $request->input('customer_id');
		$inscar->save();
		return response()->json(['message' => 'Cart Inserted Successfully']);
	}
	public function UpdateCart(Request $request , $id){
		$updcar = Cart::find($id);

		$updcar ->customer_id = $request->input('customer_id');
		$updcar->save();
		return response()->json(['message' => 'Cart Updated Successfully']);
	}
	public function DeleteCart($id){
		$delcar = Cart::find($id);
		$delcar->delete();
		return response()->json(['message' => 'Cart Deleted Successfully']);
	}
	public function getCartByCustomer($customer_id){
		$getResult = DB::table('cart')
		->select('cart_id')
		->where('customer_id' , '=' , $customer_id)
		->get();

		return response()->json($getResult);
	}
	public function getCustomerByCart($cart_id){
		$getResult = DB::table('cart')
		->select('customer.*')
		->join('customer' , 'cart.customer_id' , 'customer.customer_id')
		->where('cart.cart_id' , '=' , $cart_id)
		->get();

		return response()->json($getResult);
	}
	public function getProductByCart($cart_id){
		$getResult = DB::table('cart')
		->select('cart.cart_id' , 'cart.customer_id' , 'product.*')
		->join('product' , 'cart.cart_id' , 'product.cart_id')
		->where('cart.cart_id' , '=' , $cart_id)
		->get();

		return response()->json($getResult);
	}

}
