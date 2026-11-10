<?php

/**
 * Exemple pédagogique en un seul fichier. Dans une application, chaque classe
 * serait généralement placée dans un fichier chargé par un autoloader.
 */

namespace App\Models {
    class Article
    {
        private string $title;
        private string $section;

        public function __construct(string $title, string $section)
        {
            $this->title = $title;
            $this->section = $section;
        }

        public function describe(): string
        {
            return "Article : " . $this->title . " [" . $this->section . "]";
        }
    }

    class Section
    {
        private string $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function describe(): string
        {
            return "Section : " . $this->name;
        }
    }
}

namespace App\Blog {
    class Article
    {
        public function describe(): string
        {
            return "Article de blog : présentation des namespaces PHP.";
        }
    }
}

namespace {
    use App\Blog\Article as BlogArticle;
    use App\Models\Article;
    use App\Models\Section;

    echo "=== Classes importées avec use ===" . PHP_EOL . PHP_EOL;

    $section = new Section('Technologie');
    $article = new Article('Découvrir PHP 8', $section->getName());
    $blogArticle = new BlogArticle();

    echo $section->describe() . PHP_EOL;
    echo $article->describe() . PHP_EOL;
    echo $blogArticle->describe() . PHP_EOL;

    echo PHP_EOL . "=== Noms complets des classes (FQCN) ===" . PHP_EOL;
    echo "Article : " . Article::class . PHP_EOL;
    echo "Article de blog : " . BlogArticle::class . PHP_EOL;
    echo "Section : " . Section::class . PHP_EOL;
}
