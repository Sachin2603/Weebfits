<?php
session_start();
//session_destroy();
//die();

class Cart {
  var $items = array(); // Items in our shopping cart



  function get_items()
  {
	return $this->items;
  }

  // Add $num articles of $artnr to the cart
  function add_item($id, $qty) 
  {
	if ($this->items[$id]>0)
	{
    		$this->items[$id] = $this->items[$id]+ $qty;
	}
	else
		$this->items[$id] = $qty;
  }
 
  // Take $num articles of $artnr out of the cart
  function update_item($id, $qty)
  {
    $this->items[$id] = $qty;
  }
 
  function remove_item($id)
  {
	unset($this->items[$id]);
  }

 function display_cart()
 {
   print_r ($this->items);
   print "<br>";
 }

 function clearCart()
 {
   $this->items = array();      

 }
}

if (isset($_SESSION['cart']))
{
	$cart = $_SESSION['cart'];
}
else 
{
	$cart = new Cart();

}

if (isset($_GET["action"]))
{
	$action  = $_GET["action"];
	if ($action == "addItem")
	{
    if (!isset($_SESSION['email']))
                {
                  header("Location: login.php");
                  die();
                }
		$id = $_GET['id'];
		$qty = $_GET['qty'];
		$cart->add_item($id, $qty);
		$_SESSION['cart'] = $cart;
		header('Location: cart.php');
	}
	else if ($action == "removeItem")
	{
		$id = $_GET['id'];
		$cart->remove_item($id);
		$_SESSION['cart'] = $cart;
		header('Location: cart.php');
	}
	else if ($action == "updateItems")
	{
		$itemsToUpdate = $_GET['itemsToUpdate'];
		if (sizeof($itemsToUpdate)>0)
		{
			foreach ($itemsToUpdate as $item)
			{
			$qty = $_GET[$item];
			$cart->update_item($item, $qty);
			}
		}

		
		
		$_SESSION['cart'] = $cart;
		header('Location: cart.php');
	}
  else if($action == "clear"){ 
      $cart->clearCart();
      header('Location: cart.php');
  }


}



?>
