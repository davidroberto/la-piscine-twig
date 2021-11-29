<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    /**
     * @Route("/article", name="article_show")
     */
    public function ArticleShow()
    {
        // simulation d'une requête en base de données pour
        // récupérer un article et le stocker dans une variable
        $article = [
            "title" => "Le PHP c'est vraiment trop génial",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
            "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
            "isPublished" => false
        ];

        // je récupère un fichier twig, je le compile en HTML
        // grâce à la méthode render
        // je lui passe la variable article pour qu'il puisse
        // l'utiliser.

        // et je renvoie le HTML généré
        // en réponse HTTP au navigateur

        return $this->render('article.html.twig', [
            'article' => $article
        ]);
    }


    /**
     * @Route("/articles", name="article_list")
     */
    public function articleList()
    {
        $articles = [
            [
                "title" => "Le PHP c'est vraiment trop génial",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => false
            ],
            [
                "title" => "Le PHP c'est vraiment trop génial 2",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true
            ],
            [
                "title" => "Le PHP c'est vraiment trop génial 3",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true
            ],
            [
                "title" => "Le PHP c'est vraiment trop génial 4",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => false
            ],
            [
                "title" => "Le PHP c'est vraiment trop génial 5",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true
            ]
        ];

        return $this->render('articles.html.twig', [
            'articles' => $articles
        ]);
    }

}
