<?php


use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// project fake shopeee

Route::get('/', [\App\Http\Controllers\khuyencaoController::class, 'index']);
Route::group(['prefix'=>'/client'] ,function(){
    Route::get('/', [\App\Http\Controllers\HomePageController::class, 'index']);


});
    //view danh mục và sản phẩm ra trang chủ
    Route::get('/data-cart', [\App\Http\Controllers\ChiTietDonHangController::class, 'dataCart']);
    Route::post('/add-to-cart-update', [\App\Http\Controllers\ChiTietDonHangController::class, 'addToCartUpdate']);
    Route::post('/remove-cart', [\App\Http\Controllers\ChiTietDonHangController::class, 'removeCart']);
    Route::get('/cart', [\App\Http\Controllers\ChiTietDonHangController::class, 'index']);
    Route::get('/san-pham/{id}', [\App\Http\Controllers\HomePageController::class, 'viewSanPham']);
    Route::get('/danh-muc/{id}', [\App\Http\Controllers\HomePageController::class, 'viewDanhMuc']);
    Route::post('/add-to-cart', [\App\Http\Controllers\ChiTietDonHangController::class, 'addToCart']);
    Route::post('/your-cart-create', [\App\Http\Controllers\DonHangController::class, 'store']);
    Route::get('/your-cart', [\App\Http\Controllers\DonHangController::class, 'view']);
    Route::get('/dat-hang', [\App\Http\Controllers\DonHangController::class, 'dondathangView']);
    Route::get('/dat-hang/chi-tiet/{id}', [\App\Http\Controllers\ChiTietDonHangController::class, 'showChitiet']);


    Route::get('/dat-hang-data', [\App\Http\Controllers\DonHangController::class, 'donhangManager']);



Route::group(['prefix' => '/admin'], function() {
    Route::group(['prefix' => '/danh-muc-san-pham'], function() {
        Route::get('/index', [\App\Http\Controllers\DanhMucSanPhamController::class, 'index_vue']);
        Route::post('/index', [\App\Http\Controllers\DanhMucSanPhamController::class, 'store']);
        Route::get('/data', [\App\Http\Controllers\DanhMucSanPhamController::class, 'getData']);

        Route::get('/doi-trang-thai/{id}', [\App\Http\Controllers\DanhMucSanPhamController::class, 'doiTrangThai']);

        Route::get('/delete/{id}', [\App\Http\Controllers\DanhMucSanPhamController::class, 'destroy']);
        Route::get('/edit/{id}', [\App\Http\Controllers\DanhMucSanPhamController::class, 'edit']);
        Route::post('/update', [\App\Http\Controllers\DanhMucSanPhamController::class, 'update']);

        Route::get('/edit-form/{id}', [\App\Http\Controllers\DanhMucSanPhamController::class, 'edit_form']);
        Route::post('/update-form', [\App\Http\Controllers\DanhMucSanPhamController::class, 'update_form']);


    });
    Route::group(['prefix' => '/san-pham'], function() {
        Route::get('/index', [\App\Http\Controllers\SanPhamVueController::class, 'index']);

        Route::get('/changeStatus/{id}', [\App\Http\Controllers\SanPhamVueController::class, 'changeStatus']);

        Route::get('/loadData', [\App\Http\Controllers\SanPhamVueController::class, 'loadData']);
        Route::post('/create', [\App\Http\Controllers\SanPhamVueController::class, 'store']);
        Route::post('/update', [\App\Http\Controllers\SanPhamVueController::class, 'update']);
        Route::get('/edit/{id}', [\App\Http\Controllers\SanPhamVueController::class, 'edit']);
        Route::get('/delete/{id}', [\App\Http\Controllers\SanPhamVueController::class, 'delete']);

        Route::post('/search', [\App\Http\Controllers\SanPhamVueController::class, 'search']);
    });

    Route::group(['prefix' => '/nhap-kho'], function() {
        Route::get('/index', [\App\Http\Controllers\KhoHangController::class, 'index']);

        Route::get('/loadData', [\App\Http\Controllers\KhoHangController::class, 'loadData']);
        Route::get('/add/{id}', [\App\Http\Controllers\KhoHangController::class, 'store']);

        Route::get('/remove/{id}', [\App\Http\Controllers\KhoHangController::class, 'destroy']);
        Route::post('/update', [\App\Http\Controllers\KhoHangController::class, 'update']);

        Route::get('/create', [\App\Http\Controllers\KhoHangController::class, 'create']);
    });

    Route::group(['prefix' => '/config-client'], function() {
        Route::get('/', [\App\Http\Controllers\ConfigController::class, 'index']);
        Route::post('/', [\App\Http\Controllers\ConfigController::class, 'store']);
    });

    Route::get('/login', [\App\Http\Controllers\AdminController::class, 'login']);
    Route::post('/loginTo', [\App\Http\Controllers\AdminController::class, 'loginsecurity']);
    Route::get('/logout', [\App\Http\Controllers\AdminController::class, 'logout']);
    Route::get('/home', [\App\Http\Controllers\AdminController::class, 'homeview']);
    Route::get('/Error', [\App\Http\Controllers\AdminController::class, 'Error']);
    Route::get('/not-allow', [\App\Http\Controllers\AdminController::class, 'allow']);
    Route::get('/create', [\App\Http\Controllers\AdminController::class, 'index']);

    Route::get('/dataHang', [\App\Http\Controllers\DonHangController::class, 'dataDonHang']);
    Route::get('/quan-ly-don-hang', [\App\Http\Controllers\DonHangController::class, 'viewdonhang']);
    Route::get('/xac-nhan/{id}', [\App\Http\Controllers\DonHangController::class, 'changeSTT']);

});

Route::group(['prefix' => '/agent'], function() {
    Route::get('/register', [\App\Http\Controllers\AgentController::class, 'register']);
    Route::post('/register', [\App\Http\Controllers\AgentController::class, 'registerAction']);
    Route::get('/login', [\App\Http\Controllers\AgentController::class, 'login']);
    Route::get('/login-addtocart', [\App\Http\Controllers\AgentController::class, 'login_addtocart']);
    Route::get('/logout', [\App\Http\Controllers\AgentController::class, 'logout']);
    Route::post('/login', [\App\Http\Controllers\AgentController::class, 'loginAction']);
    Route::get('/editInfo', [\App\Http\Controllers\AgentController::class, 'editView']);
    Route::get('/idAgent/{id}', [\App\Http\Controllers\AgentController::class, 'editInfo']);
    Route::post('/Update', [\App\Http\Controllers\AgentController::class, 'UpdateInfo']);
    Route::get('/loadA', [\App\Http\Controllers\AgentController::class, 'dataA']);

    Route::get('/manager', [\App\Http\Controllers\AgentController::class, 'manager']);
    Route::get('/blocked/{id}', [\App\Http\Controllers\AgentController::class, 'lockAgent']);

    Route::get('/khai-tru/{id}', [\App\Http\Controllers\AgentController::class, 'khaitruAgent']);
    Route::get('/showdata', [\App\Http\Controllers\AgentController::class, 'showdataAgent']);


});

Route::group(['prefix' => '/ceo'], function() {

    Route::post('/create', [\App\Http\Controllers\AdminController::class, 'create']);
    Route::get('/quan-ly-admin', [\App\Http\Controllers\AdminController::class, 'view']);
    Route::get('/data', [\App\Http\Controllers\AdminController::class, 'showdata']);

    Route::get('/kich-hoat/{id}', [\App\Http\Controllers\AdminController::class, 'changeAllow']);
    Route::get('/block/{id}', [\App\Http\Controllers\AdminController::class, 'block']);
    Route::get('/khai-tru/{id}', [\App\Http\Controllers\AdminController::class, 'cancel']);



});

Route::group(['prefix' => '/user'], function() {
    // Route::get('/product', [\App\Http\Controllers\SanPhamController::class, 'viewProduct']);
    Route::get('/signup', [\App\Http\Controllers\ChapController::class, 'signupview']);
    Route::post('/signup', [\App\Http\Controllers\ChapController::class, 'createUser']);
    Route::get('/login', [\App\Http\Controllers\ChapController::class, 'login']);
    // Route::get('/login-addtocart', [\App\Http\Controllers\AgentController::class, 'login_addtocart']);
    Route::get('/logout', [\App\Http\Controllers\ChapController::class, 'logout']);
    Route::post('/loginStatus', [\App\Http\Controllers\ChapController::class, 'loginStatus']);
    Route::get('/showdata', [\App\Http\Controllers\ChapController::class, 'showdata']);

    Route::get('/manager', [\App\Http\Controllers\ChapController::class, 'manager']);
    Route::get('/blocked/{id}', [\App\Http\Controllers\ChapController::class, 'changeBlock']);
    Route::get('/destroy-access/{id}', [\App\Http\Controllers\ChapController::class, 'destroyID']);
});

Route::get('/active/agent/{hash}', [\App\Http\Controllers\AgentController::class, 'active']);

Route::get('/active/user/{hash}', [\App\Http\Controllers\ChapController::class, 'active']);


//web tự chế
Route::get('/he-mat-troi', [\App\Http\Controllers\CSScontroller::class, 'index']);




Route::get('/apptinhtien/index', [\App\Http\Controllers\AppBillController::class, 'index']);
Route::post('/apptinhtien/dientt', [\App\Http\Controllers\AppBillController::class, 'create']);

Route::get('/apptinhtien/datashow', [\App\Http\Controllers\AppBillController::class, 'data']);


//project con chó


//testchatapp
Route::get('/chat', function () {
return view('chatApp.chat');
});


// home
Route::get('/sndg/index', [\App\Http\Controllers\snopeDoge::class, 'index']);

//thanh thông số


Route::group(['prefix' => '/sndg/admin/setting'], function() {
    Route::get('/home', [\App\Http\Controllers\snopeDoge::class, 'adminIndex']);


    Route::group(['prefix' => '/chat'], function() {
        Route::get('/index', [\App\Http\Controllers\snopeDoge::class, 'ChatView']);
        Route::post('/index', [\App\Http\Controllers\snopeDoge::class, 'SendChat']);
    });



    Route::group(['prefix' => '/number'], function() {
        Route::get('/index', [\App\Http\Controllers\snopeDoge::class, 'view']);
        Route::get('/edit/{id}', [\App\Http\Controllers\snopeDoge::class, 'editnumber']);
        Route::post('/update', [\App\Http\Controllers\snopeDoge::class, 'updated']);
        Route::get('/loadNumber', [\App\Http\Controllers\snopeDoge::class, 'loadNumber']);
    });

    Route::group(['prefix' => '/story'], function() {
    Route::get('/index', [\App\Http\Controllers\snopeDoge::class, 'viewStr']);
    Route::get('/loadStr', [\App\Http\Controllers\snopeDoge::class, 'loadStr']);
    Route::get('/editStr/{id}', [\App\Http\Controllers\snopeDoge::class, 'editStr']);
    Route::post('/update', [\App\Http\Controllers\snopeDoge::class, 'updateStr']);
    });


    Route::group(['prefix' => '/timeline'], function() {
        Route::get('/index', [\App\Http\Controllers\snopeDoge::class, 'timeLineIndex']);
        Route::post('/addTimeline', [\App\Http\Controllers\snopeDoge::class, 'addTimeline']);
        Route::get('/loadData', [\App\Http\Controllers\snopeDoge::class, 'loadDataTimeline']);
        Route::get('/editTimeline/{id}', [\App\Http\Controllers\snopeDoge::class, 'editRoadmap']);
        Route::get('/isLine1/{id}', [\App\Http\Controllers\snopeDoge::class, 'isLine1']);
        Route::get('/isLine2/{id}', [\App\Http\Controllers\snopeDoge::class, 'isLine2']);
        Route::get('/isLine3/{id}', [\App\Http\Controllers\snopeDoge::class, 'isLine3']);
        Route::get('/isLine4/{id}', [\App\Http\Controllers\snopeDoge::class, 'isLine4']);
        Route::get('/isLine5/{id}', [\App\Http\Controllers\snopeDoge::class, 'isLine5']);
        Route::get('/deletedTimeline/{id}', [\App\Http\Controllers\snopeDoge::class, 'deleteTimeline']);
        Route::post('/updateTimeline', [\App\Http\Controllers\snopeDoge::class, 'updatedTimeline']);
    });


    Route::group(['prefix' => '/members'], function() {
        Route::get('/index', [\App\Http\Controllers\snopeDoge::class, 'memberIndex']);
        Route::post('/addmembers', [\App\Http\Controllers\snopeDoge::class, 'managerMember']);
        Route::get('/listmembers', [\App\Http\Controllers\snopeDoge::class, 'loadMember']);
        Route::get('/editMember/{id}', [\App\Http\Controllers\snopeDoge::class, 'editmemBer']);
        Route::get('/membersDeleted/{id}', [\App\Http\Controllers\snopeDoge::class, 'deletedMember']);
        Route::post('/updateMember', [\App\Http\Controllers\snopeDoge::class, 'UpdateMem']);
    });


    Route::group(['prefix' => '/tokenomics'], function() {
        Route::get('/index', [\App\Http\Controllers\snopeDoge::class, 'indexEditToken']);
        Route::get('/loadToken', [\App\Http\Controllers\snopeDoge::class, 'loadToken']);
        Route::get('/editInfoToken/{id}', [\App\Http\Controllers\snopeDoge::class, 'EditToken']);
        Route::post('/SaveContent', [\App\Http\Controllers\snopeDoge::class, 'updatedToken']);
    });

    Route::group(['prefix' => '/manager'], function() {
        Route::get('/signup', [\App\Http\Controllers\snopeDoge::class, 'adminSignupForm']);
        Route::post('/signup', [\App\Http\Controllers\snopeDoge::class, 'adminSingUp']);
        Route::get('/login', [\App\Http\Controllers\snopeDoge::class, 'adminLoginForm']);
        Route::post('/login', [\App\Http\Controllers\snopeDoge::class, 'adminlogin']);

        Route::post('/editAvatar', [\App\Http\Controllers\snopeDoge::class, 'editAvatar']);


        Route::get('/loadAdminData', [\App\Http\Controllers\snopeDoge::class, 'loadAdminData']);
        Route::get('/actionAdmin', [\App\Http\Controllers\snopeDoge::class, 'loadAdminIndex']);
        Route::get('/allowedAdmin/{id}', [\App\Http\Controllers\snopeDoge::class, 'allowed']);
        Route::get('/isOwner/{id}', [\App\Http\Controllers\snopeDoge::class, 'owner']);
        Route::get('/isDeleted/{id}', [\App\Http\Controllers\snopeDoge::class, 'DeleteAdmin']);
        Route::get('/editAdmins/{id}', [\App\Http\Controllers\snopeDoge::class, 'EditAdmin']);
        Route::get('/logoutAdmins', [\App\Http\Controllers\snopeDoge::class, 'logoutAdmin']);
        Route::post('/updateIfAdmins', [\App\Http\Controllers\snopeDoge::class, 'changeInfoAdmin']);
    });
});


//chat app
Route::get('/user/index/login', [\App\Http\Controllers\UserChatController::class, 'indexLogin']);
Route::post('/user/login', [\App\Http\Controllers\UserChatController::class, 'loginUser']);
Route::post('/user/dangki', [\App\Http\Controllers\UserChatController::class, 'createUser']);
Route::get('/user/index/signup', [\App\Http\Controllers\UserChatController::class, 'indexSignup']);
Route::get('/user/logout', [\App\Http\Controllers\UserChatController::class, 'dangXuat']);

Route::get('/chat/view', [\App\Http\Controllers\ChatAppController::class, 'index']);
Route::get('/chat/loadData', [\App\Http\Controllers\ChatAppController::class, 'loadData']);
Route::post('/chat/sendChat', [\App\Http\Controllers\ChatAppController::class, 'sendChat']);
Route::get('/chat/clear', [\App\Http\Controllers\ChatAppController::class, 'clearChat']);



//blog test
Route::group(['prefix' => '/'], function() {
    Route::get('home', [\App\Http\Controllers\HomeBlogs::class, 'index']);
    Route::group(['prefix' => 'blog'], function() {
            Route::get('/dataPostClient', [\App\Http\Controllers\HomeBlogs::class, 'loadPostClient']);
    });


    //user
    Route::group(['prefix' => '/people'], function() {
        Route::get('/addpost', [\App\Http\Controllers\HomeBlogs::class, 'addPostView']);
        Route::post('/addpost', [\App\Http\Controllers\PeopleController::class, 'createPost']);


        Route::get('/signup', [\App\Http\Controllers\PeopleController::class, 'indexSignup']);
        Route::post('/create', [\App\Http\Controllers\PeopleController::class, 'create']);

        Route::get('/login', [\App\Http\Controllers\PeopleController::class, 'IndexLogin']);
        Route::get('/logout', [\App\Http\Controllers\PeopleController::class, 'logout']);
        Route::post('/login', [\App\Http\Controllers\PeopleController::class, 'loginAction']);

        Route::post('/createPostimg', [\App\Http\Controllers\PeopleController::class, 'createPostimg']);
        // Route::post('/upimg', [\App\Http\Controllers\PeopleController::class, 'upimg']);
        Route::get('/profile/{id}', [\App\Http\Controllers\HomeBlogs::class, 'loadProfilePost']);

        Route::get('/actionPostPrivate', [\App\Http\Controllers\HomeBlogs::class, 'LoadPrivate']);
        Route::get('/loadPrivate', [\App\Http\Controllers\HomeBlogs::class, 'indexPrivate']);

        Route::get('/loadPeopleJoin', [\App\Http\Controllers\PeopleController::class, 'loadCommunity']);

        Route::get('/indexUser', [\App\Http\Controllers\PeopleController::class, 'indexUser']);

        Route::post('/postCmt', [\App\Http\Controllers\PeopleController::class, 'postCmt']);
        Route::get('/postCmt/{id}', [\App\Http\Controllers\PeopleController::class, 'getPost']);

        Route::get('/loadProfile', [\App\Http\Controllers\PeopleController::class, 'loadMyProfile']);
        Route::get('/editInfo/{id}', [\App\Http\Controllers\PeopleController::class, 'findInfo']);
        Route::post('/addInfo', [\App\Http\Controllers\PeopleController::class, 'updateInfo']);
        Route::post('/upImg', [\App\Http\Controllers\PeopleController::class, 'upAvatar']);

        Route::get('changeAction/{id}', [\App\Http\Controllers\HomeBlogs::class, 'changeActionPost']);
        Route::get('follow/{id}', [\App\Http\Controllers\PeopleController::class, 'follow']);
        Route::get('unfollow/{id}/iduser/{id_people}', [\App\Http\Controllers\PeopleController::class, 'unfollow']);
        Route::get('dataFollow', [\App\Http\Controllers\PeopleController::class, 'showFollow']);
    });
    Route::get('people-allow/{hash}', [\App\Http\Controllers\PeopleController::class, 'active']);

    Route::get('people-active/{hash}', [\App\Http\Controllers\PeopleController::class, 'MailViewActive']);

    // Route::get('test', [\App\Http\Controllers\tets::class, 'testview']);
    // Route::post('postimg', [\App\Http\Controllers\tets::class, 'post']);
    // Route::get('/checkCmt', [\App\Http\Controllers\PeopleController::class, 'postCmt']);

});


Route::get('test', [\App\Http\Controllers\Bang2Controller::class, 'showdata']);
