<?php 
    class myClass {
        private $request;
        private $adminContext;
        private $routeMatch;
        public function __construct($request,$admin_context,$route_match) {
          $this->request = $request;
          $this->adminContext = $admin_context;
          $this->routeMatch = $route_match;
        }
        
        public function test() {
          // This might change in https://drupal.org/node/2239009
          $current_path = $this->request->attributes->get('_system_path');
          // Retrieve an array which contains the path pieces.
          $path_args = explode('/', $current_path);
      
          // Check if the current page is admin.
          if ($this->adminContext->isAdminRoute($this->routeMatch->getRouteObject())) {
              echo $test;
          }
      
          // Load the current node.
          $node = $this->routeMatch->getParameter('node');
          if ($node) {
            echo $node;
             }
            }
        }
?>