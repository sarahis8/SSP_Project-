// $(document).ready(function(){
//     $(".addToCart").click(function(){
//       window.alert("Added to cart");
//       var sum=0;
      
//     });
//   });
var sum=0;




function add(x,y)
{
 var productPrice=x;
 var productID=y;
 window.alert("Added Product To Cart: Prodcut ID="+ productID+", Product Price = " + productPrice+"JD");
  Total();
  function Total(){
      sum=sum+x;
     var total=sum;
     window.alert("The Current Total Price Is:" + total+"JD" );
  }
}

// function createProviderFormFields(id, labelText, tooltip, regex) {
//   var tr = '<tr>' ;
//        // create a new textInputBox  
//          var textInputBox = '<input type="text" id="' + id + '" name="' + id + '" title="' + tooltip + '" />';  
//       // create a new Label Text
//           tr += '<td>' + labelText  + '</td>';
//           tr += '<td>' + textInputBox + '</td>';  
//   tr +='</tr>';
//   return tr;
// }