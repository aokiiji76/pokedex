<?php

namespace App\Controller;

use App\Repository\PokemonRepository;
use App\Repository\TypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(PokemonRepository $pokemonRepository): Response
    {
        //dd($pokemonRepository->find(1209));

        $pokemon = $pokemonRepository->findAll();


        return $this->render('main/home.html.twig', [
            'allpokemon' => $pokemon,


        ]);
    }
}
