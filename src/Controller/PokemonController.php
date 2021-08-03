<?php

namespace App\Controller;

use App\Repository\PokemonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokemonController extends AbstractController
{
    #[Route('/pokemon/{id}', name: 'pokemon_read')]
    public function read(int $id,PokemonRepository $pokemonRepository): Response
    {
        $pokemon = $pokemonRepository->find($id);
       // dd($pokemon);
        return $this->render('pokemon/read.html.twig', [
            'pokemon' => $pokemon,
        ]);
    }
}
