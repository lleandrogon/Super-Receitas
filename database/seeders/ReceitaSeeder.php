<?php

namespace Database\Seeders;

use App\Models\Receita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ReceitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Receita::insert([
            [
                'titulo' => 'Pudim',
                'ingredientes' => '3 ovos, leite, leite condensado, 1 xícara de açúcar.',
                'preparo' => 'Despeje no liquidificador os ovos, o leite e o leite condensado, bata por aproximadamente 7 minutos, despeje em uma panela com 1 xícara de açúcar e misture até formar um caramelo, despeje o caramelo em uma forma redonda que vai ao forno e por fim despeje o conteúdo do liquidificador no forno em banho maria de 30 a 35 minutos.',
                'tempo' => 45,
                'imagem' => 'receitas/pudim.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 3
            ],
            [
                'titulo' => 'Bolo de Chocolate',
                'ingredientes' => '2 xícaras de farinha, 1 xícara de açúcar, 1 xícara de chocolate em pó, 1 xícara de leite, 1/2 xícara de óleo, 3 ovos, 1 colher de sopa de fermento.',
                'preparo' => 'Misture todos os ingredientes secos. Adicione os líquidos e ovos, misturando bem. Por último, acrescente o fermento. Asse em forno médio (180°C) por aproximadamente 40 minutos.',
                'tempo' => 50,
                'imagem' => 'receitas/bolo-de-chocolate.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 5
            ],
            [
                'titulo' => 'Panqueca Americana',
                'ingredientes' => '1 xícara de farinha, 1 ovo, 3/4 xícara de leite, 2 colheres de açúcar, 1 colher de fermento, 1 pitada de sal.',
                'preparo' => 'Misture todos os ingredientes até obter uma massa homogênea. Aqueça uma frigideira antiaderente, coloque pequenas porções e doure dos dois lados. Sirva com mel ou frutas.',
                'tempo' => 20,
                'imagem' => 'receitas/panqueca-americana.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 4
            ],
            [
                'titulo' => 'Brigadeiro',
                'ingredientes' => '1 lata de leite condensado, 2 colheres de sopa de chocolate em pó, 1 colher de sopa de manteiga.',
                'preparo' => 'Em uma panela, misture todos os ingredientes e cozinhe em fogo médio, mexendo sem parar até desgrudar do fundo (cerca de 10 minutos). Deixe esfriar e faça bolinhas.',
                'tempo' => 15,
                'imagem' => 'receitas/brigadeiro.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 1
            ],
            [
                'titulo' => 'Arroz Branco',
                'ingredientes' => '1 xícara de arroz, 2 xícaras de água, 1 dente de alho, 1 colher de sopa de óleo, sal a gosto.',
                'preparo' => 'Refogue o alho no óleo, acrescente o arroz e misture bem. Adicione a água fervente e o sal. Tampe a panela e cozinhe em fogo baixo até a água secar (cerca de 15 minutos). Desligue e deixe descansar por 5 minutos.',
                'tempo' => 20,
                'imagem' => 'receitas/arroz-branco.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 12
            ],
            [
                'titulo' => 'Frango Grelhado',
                'ingredientes' => '2 peitos de frango, suco de 1 limão, 2 colheres de azeite, sal, pimenta e ervas a gosto.',
                'preparo' => 'Tempere o frango com limão, sal, pimenta e ervas. Deixe marinar por 15 minutos. Grelhe em frigideira antiaderente com azeite por 6-8 minutos de cada lado até dourar.',
                'tempo' => 25,
                'imagem' => 'receitas/frango-grelhado.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 9
            ],
            [
                'titulo' => 'Salada Caesar',
                'ingredientes' => '1 alface romana, 1 xícara de croutons, 50g de queijo parmesão, 6 fatias de bacon. Molho: 1/2 xícara de maionese, 1 colher de mostarda, 1 colher de suco de limão, 1 dente de alho.',
                'preparo' => 'Lave e rasgue a alface. Frite o bacon até ficar crocante e pique. Misture os ingredientes do molho. Monte a salada com alface, croutons, bacon e regue com o molho. Finalize com parmesão ralado.',
                'tempo' => 15,
                'imagem' => 'receitas/salada-caesar.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 12
            ],
            [
                'titulo' => 'Smoothie de Morango',
                'ingredientes' => '1 xícara de morangos, 1 banana, 1 xícara de iogurte natural, 1/2 xícara de leite, 1 colher de mel.',
                'preparo' => 'Lave os morangos e descasque a banana. Bata todos os ingredientes no liquidificador até ficar homogêneo. Sirva gelado.',
                'tempo' => 5,
                'imagem' => 'receitas/smoothie-de-morango.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 15
            ]
        ]);
    }
}
