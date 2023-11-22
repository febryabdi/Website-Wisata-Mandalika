// to display total users :: viewUsers.php DONE
function showUsers(){
    $.ajax({
        url:"./controller/viewUsers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
// to display total booking :: viewAllBooks.php DONE
function showBooks(){
    $.ajax({
        url:"./controller/viewAllBooks.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
// to change book status :: updateBookStatus.php DONE
function ChangeBookStatus(id){
    $.ajax({
       url:"./controller/updateBookStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
           alert('Booking Status updated successfully');
           $('form').trigger('reset');
           showOrders();
       }
   });
}
// Change Payment status :: changePay.php DONE
function ChangePay(id){
    $.ajax({
       url:"./controller/changePay.php",
       method:"post",
       data:{record:id},
       success:function(data){
           alert('Payment Status updated successfully');
           $('form').trigger('reset');
           showOrders();
       }
   });
}


//add product data :: addItemController.php
// function addItems(){
//     var NIK=$('#NIK').val();
//     var nama_lengkap=$('#nama_lengkap').val();
//     var usia=$('#usia').val();
//     var alamat=$('#alamat').val();
//     var nomor_telefon=$('#nomor_telefon').val();
//     var email=$('#email').val();
//     var tanggal_booking=$('#tanggal_booking').val();
//     var tiket=$('#tiket').val();
//     var booking_status=$('#booking_status').val();
//     var payment_status=$('#payment_status').val();


//     var fd = new FormData();
//     fd.append('NIK', NIK);
//     fd.append('nama_lengkap', nama_lengkap);
//     fd.append('usia', usia);
//     fd.append('alamat', alamat);
//     fd.append('nomor_telefon', nomor_telefon);
//     fd.append('email', email);
//     fd.append('tanggal_booking', tanggal_booking);
//     fd.append('tiket', tiket);
//     fd.append('booking_status', booking_status);
//     fd.append('payment_status', payment_status);
//     $.ajax({
//         url:"./controller/addItemController.php",
//         method:"post",
//         data:fd,
//         processData: false,
//         contentType: false,
//         success: function(data){
//             alert('Product Added successfully.');
//             $('form').trigger('reset');
//             // showProductItems();
//         }
//     });
// }

//edit product data :: editItemForm.php DONE
function itemEditForm(NIK) {
    // Create a JavaScript object to collect the form data.
    var formData = {
        NIK: $('#NIK').val(),
        nama_lengkap: $('#nama_lengkap').val(),
        usia: $('#usia').val(),
        alamat: $('#alamat').val(),
        nomor_telefon: $('#nomor_telefon').val(),
        email: $('#email').val(),
        tanggal_booking: $('#tanggal_booking').val(),
        tiket: $('#tiket').val()
    };

    formData.NIK = NIK;
    
    $.ajax({
        url: "./controller/editItemForm.php",
        method: "post",
        data: formData,  // Send the form data as an object
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}

//update product after submit
// function updateItem(){
//     var NIK=$('#NIK').val();
//     var nama_lengkap=$('#nama_lengkap').val();
//     var usia=$('#usia').val();
//     var alamat=$('#alamat').val();
//     var nomor_telefon=$('#nomor_telefon').val();
//     var email=$('#email').val();
//     var tanggal_booking=$('#tanggal_booking').val();
//     var tiket=$('#tiket').val();
//     var booking_status=$('#booking_status').val();
//     var payment_status=$('#payment_status').val();


//     var fd = new FormData();
//     fd.append('NIK', NIK);
//     fd.append('nama_lengkap', nama_lengkap);
//     fd.append('usia', usia);
//     fd.append('alamat', alamat);
//     fd.append('nomor_telefon', nomor_telefon);
//     fd.append('email', email);
//     fd.append('tanggal_booking', tanggal_booking);
//     fd.append('tiket', tiket);
//     fd.append('booking_status', booking_status);
//     fd.append('payment_status', payment_status);
//     $.ajax({
//       url:'./controller/updateItemController.php',
//       method:'post',
//       data:fd,
//       processData: false,
//       contentType: false,
//       success: function(data){
//         alert('Data Update Success.');
//         $('form').trigger('reset');
//         showProductItems();
//       }
//     });
// }

//delete product data :: deleteItemController.php
function BookingDelete(id){
    $.ajax({
        url:"./controller/deleteItemController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Items Successfully deleted');
            // $('form').trigger('reset');
            // showProductItems();
        }
    });
}


//delete cart data
// function cartDelete(id){
//     $.ajax({
//         url:"./controller/deleteCartController.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             alert('Cart Item Successfully deleted');
//             $('form').trigger('reset');
//             showMyCart();
//         }
//     });
// }

// function eachDetailsForm(id){
//     $.ajax({
//         url:"./view/viewEachDetails.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             $('.allContent-section').html(data);
//         }
//     });
// }



// //delete category data
// function categoryDelete(id){
//     $.ajax({
//         url:"./controller/catDeleteController.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             alert('Category Successfully deleted');
//             $('form').trigger('reset');
//             showCategory();
//         }
//     });
// }

// //delete size data
// function sizeDelete(id){
//     $.ajax({
//         url:"./controller/deleteSizeController.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             alert('Size Successfully deleted');
//             $('form').trigger('reset');
//             showSizes();
//         }
//     });
// }


// //delete variation data
// function variationDelete(id){
//     $.ajax({
//         url:"./controller/deleteVariationController.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             alert('Successfully deleted');
//             $('form').trigger('reset');
//             showProductSizes();
//         }
//     });
// }

// //edit variation data
// function variationEditForm(id){
//     $.ajax({
//         url:"./adminView/editVariationForm.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             $('.allContent-section').html(data);
//         }
//     });
// }


// //update variation after submit
// function updateVariations(){
//     var v_id = $('#v_id').val();
//     var product = $('#product').val();
//     var size = $('#size').val();
//     var qty = $('#qty').val();
//     var fd = new FormData();
//     fd.append('v_id', v_id);
//     fd.append('product', product);
//     fd.append('size', size);
//     fd.append('qty', qty);
   
//     $.ajax({
//       url:'./controller/updateVariationController.php',
//       method:'post',
//       data:fd,
//       processData: false,
//       contentType: false,
//       success: function(data){
//         alert('Update Success.');
//         $('form').trigger('reset');
//         showProductSizes();
//       }
//     });
// }
// function search(id){
//     $.ajax({
//         url:"./controller/searchController.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             $('.eachCategoryProducts').html(data);
//         }
//     });
// }


// function quantityPlus(id){ 
//     $.ajax({
//         url:"./controller/addQuantityController.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             $('form').trigger('reset');
//             showMyCart();
//         }
//     });
// }
// function quantityMinus(id){
//     $.ajax({
//         url:"./controller/subQuantityController.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             $('form').trigger('reset');
//             showMyCart();
//         }
//     });
// }

// function checkout(){
//     $.ajax({
//         url:"./view/viewCheckout.php",
//         method:"post",
//         data:{record:1},
//         success:function(data){
//             $('.allContent-section').html(data);
//         }
//     });
// }


// function removeFromWish(id){
//     $.ajax({
//         url:"./controller/removeFromWishlist.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             alert('Removed from wishlist');
//         }
//     });
// }


// function addToWish(id){
//     $.ajax({
//         url:"./controller/addToWishlist.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             alert('Added to wishlist');        
//         }
//     });
// }