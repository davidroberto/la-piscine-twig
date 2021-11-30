<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    /**
     * @Route("/article/{id}", name="article_show")
     */
    public function ArticleShow($id)
    {
        $articles = [
            1 => [
                "title" => "Le PHP c'est vraiment trop génial",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => false,
                "id" => 1
            ],
            2 => [
                "title" => "Le PHP c'est vraiment trop génial 2",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 2
            ],
            3 => [
                "title" => "Le PHP c'est vraiment trop génial 3",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 3
            ],
            4 => [
                "title" => "Le PHP c'est vraiment trop génial 4",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => false,
                "id" => 4
            ],
            5 => [
                "title" => "Le PHP c'est vraiment trop génial 5",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 5
            ]
        ];

        if (!array_key_exists($id, $articles)) {
            throw $this->createNotFoundException("L'article n'a pas été trouvé !");
        }

        return $this->render('article.html.twig', [
            'article' => $articles[$id]
        ]);
    }


    /**
     * @Route("/articles", name="article_list")
     */
    public function articleList()
    {
        $articles = [
            1 => [
                "title" => "Le PHP c'est vraiment trop génial",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => false,
                "id" => 1
            ],
            2 => [
                "title" => "Le PHP c'est vraiment trop génial 2",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 2
            ],
            3 => [
                "title" => "Le PHP c'est vraiment trop génial 3",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 3
            ],
            4 => [
                "title" => "Le PHP c'est vraiment trop génial 4",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => false,
                "id" => 4
            ],
            5 => [
                "title" => "Le PHP c'est vraiment trop génial 5",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 5
            ]
        ];

        return $this->render('articles.html.twig', [
            'articles' => $articles
        ]);
    }

}
