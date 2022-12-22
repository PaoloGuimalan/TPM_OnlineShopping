setInterval(function(){
      var link_product = window.location.href.split("#");

      if (link_product[1] == 'products')
      {
           var product_div = document.getElementById('products_div').style.display = 'unset';
           var brand_div = document.getElementById('brands_div').style.display = 'none';
           var category_div = document.getElementById('categories_div').style.display = 'none';
      }
      else if (link_product[1] == 'brands')
      {
           var brand_div = document.getElementById('brands_div').style.display = 'unset';
           var product_div = document.getElementById('products_div').style.display = 'none';
           var category_div = document.getElementById('categories_div').style.display = 'none';
      }
      else if (link_product[1] == 'categories')
      {
           var brand_div = document.getElementById('brands_div').style.display = 'none';
           var product_div = document.getElementById('products_div').style.display = 'none';
           var category_div = document.getElementById('categories_div').style.display = 'unset';
      }
},500);

function products_load()
{
	window.location.href = 'admin_stocks.php#products'
}

function brands_load()
{
	window.location.href = 'admin_stocks.php#brands'
}

function categories_load()
{
	window.location.href = 'admin_stocks.php#categories'
}