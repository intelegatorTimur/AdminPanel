            class cart{
            public static function index(){
            global $twig;
            require_once MODELS.'CartModel.php';
            $page = $twig->render('cart.html');

            return $page;
            }
            }
        