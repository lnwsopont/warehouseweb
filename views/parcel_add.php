<html>
<table width=50% align=center>
<tr>
<td>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=date], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: KHAKI;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #;
}

div {
    border-radius: 5px;
    background-color: LAVENDER;
    padding: 20px;
}
</style>
<body>



<div>
  <form >
	
   
      <header align=center>
    <h1>Product Information</h1>
      </header>

    <label for="ProductID">Product ID</label><br>
    <input type="text" id="productid" name="productid" placeholder="Product ID.."><br>

    <label for="Customer ID">Customer ID</label><br>
    <input type="text" id="customerid" name="customerid" placeholder="Customer ID.."><br>

   <label for="Product Type">Product Type</label><br>
      <select id="Producttype" name="producttype">
      <option value="Fragile">Fragile</option>
      <option value="Not-Fragile">Not-Fragile</option>

     
    </select>


    <input type="submit" value="Next">
  
  </form>
</tr>
</td>
</table>
  
</div>

</body>
</html>