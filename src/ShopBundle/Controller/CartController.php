<?php
namespace ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ShopBundle\Model\Cart;
use ShopBundle\Entity\Product;

class CartController extends Controller


{
  public function indexAction()
  {
    $repository = $this->getDoctrine()->getRepository('ShopBundle:Product');
    $products = $repository->findAll();
    $cart = new Cart($this->container->get('request')->getSession());
    return $this->render('ShopBundle:Cart:index.html.twig', array(
      'products' => $products,
      'cart' => $cart->getCart()
    ));
  }

  
  public function addAction($id)
  {
    $repository = $this->getDoctrine()->getRepository('ShopBundle:Product');
    $products = $repository->findAll();
    $cart = new Cart($this->container->get('request')->getSession());
    $cart->addItem($id);
    if ($this->container->get('request')->isXmlHttpRequest())
    {
      return $this->render('ShopBundle:Cart:cart.html.twig', array(
        'products' => $products,
        'cart' => $cart->getCart()
      ));
    }
    else
    {
      return $this->redirect($this->generateUrl('cart'));
    }
  }
  public function removeAction($id)
  {
    $cart = new Cart($this->container->get('request')->getSession());
    $cart->removeItem($id);
    if ($this->container->get('request')->isXmlHttpRequest())
    {
      return $this->render('ShopBundle:Cart:cart.html.twig', array(
        'products' => Product::findAll(),
        'cart' => $cart->getCart()
      ));
    }
    else
    {
      return $this->redirect($this->generateUrl('cart'));
    }
  }
}