<?php

use Illuminate\Http\Request;
use App\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Admin CRUD
Route::get('/admins/id={id}' , 'manage@ShowDataAdminById');
Route::get('/admins' , 'manage@ShowDataAdmin');
Route::post('/addAdmin' , 'manage@InsertAdmin');
Route::put('/updateAdmin/id={id}' , 'manage@UpdateAdmin');
Route::delete('/deleteAdmin/id={id}' , 'manage@DeleteAdmin');
              /***********************/
//Brand CRUD
Route::get('/brands/id={id}' , 'manage@ShowDataBrandsById');
Route::get('/brands' , 'manage@ShowDataBrands');
Route::post('/addBrand' , 'manage@InsertBrand');
Route::put('/updateBrand/id={id}' , 'manage@UpdateBrand');
Route::delete('/deleteBrand/id={id}' , 'manage@DeleteBrand');
Route::get('/searchBrands/brand_name={brand}' , 'manage@searchBrand');
             /************************/
//Customer CRUD             
Route::get('/customers/id={id}/access_key={apikey}' , 'manage@ShowDataCustomersById')->middleware('APIkey');
Route::get('/customers/access_key={apikey}' , 'manage@ShowDataCustomers')->middleware('APIkey');
Route::post('/addCustomer/access_key={apikey}' , 'manage@InsertCustomer')->middleware('APIkey');
Route::put('/updateCustomer/id={id}/access_key={apikey}' , 'manage@UpdateCustomer')->middleware('APIkey');
Route::delete('/deleteCustomer/id={id}/access_key={apikey}' , 'manage@DeleteCustomer')->middleware('APIkey');
Route::get('/getSpecificAccount/username={username}/access_key={apikey}' , 'manage@getAccount')->middleware('APIkey');
Route::get('/searchProductbyTag/subcategory_id={id}/access_key={apikey}','manage@searchByTags')->middleware('APIkey');
             /************************/    
//Product CRUD
Route::get('/products/id={id}' , 'manage@ShowDataProductsById');
Route::get('/products' , 'manage@ShowDataProducts');
Route::post('/addProducts' , 'manage@InsertProduct');
Route::put('/updateProducts/id={id}' , 'manage@UpdateProduct');
Route::delete('/deleteProducts/id={id}' , 'manage@DeleteProduct');
Route::get('/searchProduct/product_id={id}/product_name={product_name}/available={available}/discount={discount}/customer_id={customer_id}/brand_id={brand_id}' , 'manage@SearchProduct');
Route::get('/getProductforCustomer/customer_id={customer_id}' , 'manage@getProductForCustomer');
Route::get('/getProductforBrand/brand_id={brand_id}' , 'manage@getProductForBrand');
Route::get('/getSpecificProduct/product_name={product_name}' , 'manage@serachProduct2');
Route::get('/getNewestProduct/data1={date1}/date2={date2}' , 'manage@sortProductByDate');
Route::get('/getHotdealsProducts/hotdeals={hot_deals}' , 'manage@getProducthasHotDeals');
Route::get('/getProductsByCategories/category_id={category_id}' , 'manage@getProductsForCategory');

			/************************/
//Favourite CRUD
Route::get('/favourites/id={id}' , 'manage@ShowDataFavouritesById');
Route::get('/favourites' , 'manage@ShowDataFavourites');
Route::post('/addFavourite' , 'manage@InsertFavourite');
Route::put('/updateFavourite/id={id}' , 'manage@UpdateFavourite');
Route::delete('/deleteFavourite/id={id}' , 'manage@DeleteFavourite');
            /***********************/
//Phone CRUD
Route::get('/phones/id={id}' , 'manage@ShowDataPhonesById');
Route::get('/phones' , 'manage@ShowDataPhones');
Route::post('/addPhone' , 'manage@InsertPhone');
Route::put('/updatePhone/id={id}' , 'manage@UpdatePhone');
Route::delete('/deletePhone/id={id}' , 'manage@DeletePhone');
			/**********************/
//Category R
Route::get('/categories/id={id}' , 'manage@ShowDataCategoryById');
Route::get('/categories' , 'manage@ShowDataCategory');
			/**********************/
//Sub_Category R
Route::get('/sub_categories/id={id}' , 'manage@ShowDataSub_CategoryById');
Route::get('/sub_categories' , 'manage@ShowDataSub_Category');
			/**********************/
//Description CRUD
Route::get('/descriptions/id={id}' , 'manage@ShowDataDescriptionById');
Route::get('/description' , 'manage@ShowDataDescription');
Route::post('/addDescription' , 'manage@InsertDescription');
Route::put('/updateDescription/id={id}' , 'manage@UpdateDescription');
Route::delete('/deleteDescription/id={id}' , 'manage@DeleteDescription');
Route::get('/searchByDescription/product_id={id}','manage@getDescriptionByProduct');
Route::get('/searchByCategory/category_id={id}','manage@getDescriptionByCategory');
Route::get('/getHighToLowPrice' , 'manage@sortPriceHighToLow');
Route::get('/getLowToHighPrice' , 'manage@sortPriceLowToHigh');
Route::get('/searchFilter/color={color}/size={size}/material={material}/hot_deals={hotdeals}/price={price}/category_id={id1}/sub_category_id={id2}/brand_name={brandname}' , 'manage@searchByAll');
Route::get('/searchBySpecificSubCategoryID/subcategory_id={id}' , 'manage@searchbySub_Category');
			/*********************/

//Gender CRUD
Route::get('/gender/id={id}' , 'manage@ShowDataGenderById');
Route::get('/gender' , 'manage@ShowDataGender');
Route::post('/addGender' , 'manage@InsertGender');
Route::put('/updateGender/id={id}' , 'manage@UpdateGender');
Route::delete('/deleteGender/id={id}' , 'manage@DeleteGender');
            /*********************/
//Payment CRUD
Route::get('/payment/id={id}' , 'manage@ShowDataPaymentById');
Route::get('/payment' , 'manage@ShowDataPayment');
Route::post('/addPayment' , 'manage@InsertPayment');
Route::put('/updatePayment/id={id}' , 'manage@UpdatePayment');
Route::delete('/deletePayment/id={id}' , 'manage@DeletePayment');
			/*********************/
//Order CRUD
Route::get('/order/id={id}' , 'manage@ShowDataOrderById');
Route::get('/order' , 'manage@ShowDataOrder');
Route::post('/addOrder' , 'manage@InsertOrder');
Route::put('/updateOrder/id={id}' , 'manage@UpdateOrder');
Route::delete('/deleteOrder/id={id}' , 'manage@DeleteOrder');
Route::get('/getOrder/customer_id={id}' , 'manage@getOrderForCustomer');
Route::get('/getPayment/payment_id={id}' , 'manage@getOrderForPayment');
			/*********************/
//ProdOrder CRUD
Route::get('/prodorder/id={id}' , 'manage@ShowDataProdOrderById');
Route::get('/prodorder' , 'manage@ShowDataProdOrder');
Route::post('/addProdOrder' , 'manage@InsertProdOrder');
Route::put('/updateProdOrder/id={id}' , 'manage@UpdateProdOrder');
Route::delete('/deleteProdOrder/id={id}' , 'manage@DeleteProdOrder');
			/*********************/	
//Transaction CRUD
Route::get('/transaction/id={id}' , 'manage@ShowDataTransactionById');
Route::get('/transaction' , 'manage@ShowDataTransaction');
Route::post('/addTransaction' , 'manage@InsertTransaction');
Route::put('/updateTransaction/id={id}' , 'manage@UpdateTransaction');
Route::delete('/deleteTransaction/id={id}' , 'manage@DeleteTransaction');
Route::get('/getTransactionByOrder/order_id={id}' , 'manage@getTransactionByOrder');
Route::get('/getTransactionByPayment/payment_id={id}','manage@getTransactionByPayment');
			/*********************/
//Delivery CRUD
Route::get('/delivery/id={id}' , 'manage@ShowDataDeliveryById');
Route::get('/delivery' , 'manage@ShowDataDelivery');
Route::post('/addDelivery' , 'manage@InsertDelivery');
Route::put('/updateDelivery/id={id}' , 'manage@UpdateDelivery');
Route::delete('/deleteDelivery/id={id}' , 'manage@DeleteDelivery');
			/*********************/
//DeliveryRate CRUD
Route::get('/deliveryrate/id={id}' , 'manage@ShowDataDeliveryRateById');
Route::get('/deliveryrate' , 'manage@ShowDataDeliveryRate');
Route::post('/addDeliveryRate' , 'manage@InsertDeliveryRate');
Route::put('/updateDeliveryRate/id={id}' , 'manage@UpdateDeliveryRate');
Route::delete('/deleteDeliveryRate/id={id}' , 'manage@DeleteDeliveryRate');
			/*********************/
//BrandRate CRUD
Route::get('/brandrate/id={id}' , 'manage@ShowDataBrandRateById');
Route::get('/brandrate' , 'manage@ShowDataBrandRate');
Route::post('/addBrandRate' , 'manage@InsertBrandRate');
Route::put('/updateBrandRate/id={id}' , 'manage@UpdateBrandRate');
Route::delete('/deleteBrandRate/id={id}' , 'manage@DeleteBrandRate');
		    /*********************/
//CustomerService CRUD
Route::get('/customerservice/id={id}' , 'manage@ShowDataCustomerServiceById');
Route::get('/customerservice' , 'manage@ShowDataCustomerService');
Route::post('/addCustomerService' , 'manage@InsertCustomerService');
Route::put('/updateCustomerService/id={id}' , 'manage@UpdateCustomerService');
Route::delete('/deleteCustomerService/id={id}' , 'manage@DeleteCustomerService');
			/*********************/
//Chat CRUD	
Route::get('/chat/id={id}' , 'manage@ShowDataChatById');
Route::get('/chat' , 'manage@ShowDataChat');
Route::post('/addChat' , 'manage@InsertChat');
Route::put('/updateChat/id={id}' , 'manage@UpdateChat');
Route::delete('/deleteChat/id={id}' , 'manage@DeleteChat');
			/*********************/
//Message CRUD
Route::get('/message/id={id}' , 'manage@ShowDataMessageById');
Route::get('/message' , 'manage@ShowDataMessage');
Route::post('/addChat' , 'manage@InsertMessage');
Route::put('/updateChat/id={id}' , 'manage@UpdateMessage');
Route::delete('/deleteChat/id={id}' , 'manage@DeleteMessage');
			/*********************/
//DeliveryImage CRUD
Route::get('/deliveryimage/id={id}' , 'manage@ShowDataDeliveryImageById');
Route::get('/deliveryimage' , 'manage@ShowDataDeliveryImage');
Route::post('/addDeliveryImage' , 'manage@InsertDeliveryImage');
Route::put('/updateDeliveryImage/id={id}' , 'manage@DeliveryImage');
Route::delete('/deleteDeliveryImage/id={id}' , 'manage@DeleteDeliveryImage');
			/********************/
//Cart CRUD
Route::get('/getcartbyid/id={id}' , 'manage@ShowCartById');
Route::get('/getcart' , 'manage@ShowCart');
Route::post('/addcart' , 'manage@InsertCart');
Route::put('/updatecart/id={id}' , 'manage@UpdateCart');
Route::delete('/deletecart/id={id}' , 'manage@DeleteCart');
Route::get('/getCartForSpecificCustomer/customer_id={id}' , 'manage@getCartByCustomer');
Route::get('/getCustomerBySpecificCart/cart_id={id}' , 'manage@getCustomerByCart');
Route::get('/getProductForSpecificCart/cart_id={id}' , 'manage@getProductByCart');
			/********************/