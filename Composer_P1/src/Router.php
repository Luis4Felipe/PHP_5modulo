<?php

namespace Projeto;

class Router
{
    private $routes = [];
    private $method; 
    private $path; // Caminho da requisição
    private $params; 

    // Construtor da classe Router
    public function __construct($method, $path)
    {
        $this->method = $method; 
        $this->path = $path; 
    }

    // Método para definir uma rota GET
    public function get(string $route, $action)
    {
        $this->add('GET', $route, $action); // Adiciona a rota GET
    }

    // Método para definir uma rota POST
    public function post(string $route, $action)
    {
        $this->add('POST', $route, $action); // Adiciona a rota POST
    }

    // Método privado para adicionar uma rota
    private function add(string $method, string $route, $action)
    {
        $this->routes[$method][$route] = $action; // Adiciona a rota ao array de rotas
    }

    // Método para obter os parâmetros extraídos da URL
    public function getParams()
    {
        return $this->params; // Retorna os parâmetros
    }

    // Método para lidar com a rota e retornar a ação correspondente
    public function handler()
    {
        // Verifica se existem rotas para o método da requisição
        if (empty($this->routes[$this->method])) {
            return false; // Irá retornar falso se não houver rotas para o método
        }

        // Verifica se a rota exata foi definida
        if (isset($this->routes[$this->method][$this->path])) {
            return $this->routes[$this->method][$this->path]; // Retorna a ação correspondente
        }

        // Percorre todas as rotas definidas para o método da requisição
        foreach ($this->routes[$this->method] as $route => $action) {
            $result = $this->checkUrl($route, $this->path); // Verifica se a URL corresponde à rota

            // Se a URL corresponder à rota, retorna a ação correspondente
            if ($result >= 1) {
                return $action;
            }
        }
    }

    // Método privado para verificar se a URL corresponde à rota
    private function checkUrl(string $route, $path)
    {
        // Extrai as variáveis da rota
        preg_match_all('/\{([^\}]*)\}/', $route, $variables);

        // Substitui os placeholders da rota por regex
        $regex = str_replace('/', '\/', $route);

        foreach ($variables[0] as $k => $variable) {
            $replacement = '([a-zA-Z0-9\-\_\ ]+)'; // Define o padrão de substituição
            $regex = str_replace($variable, $replacement, $regex); // Substitui o placeholder pelo padrão
        }

        // Substitui os placeholders restantes da rota por regex
        $regex = preg_replace('/{([a-zA-Z]+)}/', '([a-zA-Z0-9+])', $regex);

        // Realiza uma correspondência entre a URL e a regex da rota
        $result = preg_match('/^' . $regex . '$/', $path, $params);

        $this->params = $params; // Armazena os parâmetros extraídos da URL

        return $result; // Retorna o resultado da correspondência
    }
}
