<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\curso;
class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cursos')->insert([
           [
          'CursoNombre' =>'nombre de un curso'
          , 'CursoDescr' =>'descripcion del curso'
          , 'CursoSeleccionado' =>'si'
          ,  'CursoComentario' =>'comentario'
          ,  'CursoObjetivo' =>'objetivo'
          ,  'ClasifAcionId' =>'1'
          ,  'TipoCursoId' =>'1'
          ,  'TipoEnfoqueId' =>'1'
          ,  'CursoTemario' =>'temario'
           ],
          
           
            [
                'CursoNombre' => 'Introducción a la Programación',
                'CursoDescr' => 'Aprende los conceptos básicos de la programación y cómo crear algoritmos.',
                'CursoSeleccionado' => 'si',
                'CursoComentario' => 'Curso recomendado para principiantes en el mundo de la programación.',
                'CursoObjetivo' => 'Comprender los fundamentos de la lógica de programación y resolver problemas simples.',
                'ClasifAcionId' => '1',
                'TipoCursoId' => '1',
                'TipoEnfoqueId' => '1',
                'CursoTemario' => 'Introducción a variables, estructuras de control, funciones básicas.'
            ],
            [
                'CursoNombre' => 'Diseño Gráfico para Principiantes',
                'CursoDescr' => 'Descubre los principios del diseño gráfico y cómo usar herramientas como Adobe Illustrator.',
                'CursoSeleccionado' => 'si',
                'CursoComentario' => 'Ideal para personas interesadas en el diseño y la creatividad visual.',
                'CursoObjetivo' => 'Aprender a crear composiciones visuales atractivas y manipular imágenes.',
                'ClasifAcionId' => '2',
                'TipoCursoId' => '1',
                'TipoEnfoqueId' => '1',
                'CursoTemario' => 'Color y tipografía, composición de imágenes, introducción a Illustrator.'
            ],
            [
                'CursoNombre' => 'Marketing Digital 101',
                'CursoDescr' => 'Descubre las estrategias básicas de marketing digital y cómo promocionar tu negocio en línea.',
                'CursoSeleccionado' => 'si',
                'CursoComentario' => 'Recomendado para emprendedores que desean aprender a usar internet para llegar a su audiencia.',
                'CursoObjetivo' => 'Familiarizarse con conceptos como SEO, redes sociales y publicidad en línea.',
                'ClasifAcionId' => '3',
                'TipoCursoId' => '1',
                'TipoEnfoqueId' => '1',
                'CursoTemario' => 'SEO básico, estrategias de redes sociales, introducción a Google Ads.'
            ],
            [
                'CursoNombre' => 'Matemáticas para no Matemáticos',
                'CursoDescr' => 'Domina conceptos matemáticos fundamentales de manera sencilla y práctica.',
                'CursoSeleccionado' => 'si',
                'CursoComentario' => 'Perfecto para aquellos que quieren mejorar sus habilidades matemáticas sin complicaciones.',
                'CursoObjetivo' => 'Aprender a aplicar matemáticas en situaciones cotidianas y laborales.',
                'ClasifAcionId' => '1',
                'TipoCursoId' => '1',
                'TipoEnfoqueId' => '2',
                'CursoTemario' => 'Operaciones básicas, proporciones, porcentajes, interpretación de gráficos.'
            ],
            [
                'CursoNombre' => 'Fotografía Digital para Principiantes',
                'CursoDescr' => 'Aprende a capturar momentos con tu cámara digital y a editar tus fotos.',
                'CursoSeleccionado' => 'si',
                'CursoComentario' => 'Recomendado para entusiastas de la fotografía que están comenzando.',
                'CursoObjetivo' => 'Dominar los conceptos básicos de la composición fotográfica y la edición.',
                'ClasifAcionId' => '2',
                'TipoCursoId' => '1',
                'TipoEnfoqueId' => '1',
                'CursoTemario' => 'Uso de la cámara, composición, introducción a la edición en Lightroom.'
            ],
            [
                'CursoNombre' => 'Programación en Python',
                'CursoDescr' => 'Aprende a programar utilizando el lenguaje Python y desarrolla aplicaciones sencillas.',
                'CursoSeleccionado' => 'si',
                'CursoComentario' => 'Recomendado como primer lenguaje de programación para principiantes.',
                'CursoObjetivo' => 'Dominar la sintaxis de Python y crear programas básicos.',
                'ClasifAcionId' => '1',
                'TipoCursoId' => '1',
                'TipoEnfoqueId' => '1',
                'CursoTemario' => 'Sintaxis básica, estructuras de datos simples, resolución de problemas.'
            ],
            [
                'CursoNombre' => 'Inglés Conversacional',
                'CursoDescr' => 'Mejora tus habilidades de conversación en inglés y gana confianza al hablar.',
                'CursoSeleccionado' => 'si',
                'CursoComentario' => 'Ideal para quienes desean practicar y perfeccionar sus habilidades de conversación.',
                'CursoObjetivo' => 'Participar en diálogos fluidos y expresar ideas de manera efectiva en inglés.',
                'ClasifAcionId' => '4',
                'TipoCursoId' => '2',
                'TipoEnfoqueId' => '2',
                'CursoTemario' => 'Expresiones cotidianas, situaciones sociales, debates informales.'
            ],
            [
                'CursoNombre' => 'Dibujo Artístico',
                'CursoDescr' => 'Descubre el mundo del dibujo artístico y aprende a representar tus ideas en papel.',
                'CursoSeleccionado' => 'si',
                'CursoComentario' => 'Recomendado para amantes del arte que desean explorar su creatividad a través del dibujo.',
                'CursoObjetivo' => 'Desarrollar habilidades de dibujo a mano alzada y comprender la anatomía básica.',
                'ClasifAcionId' => '2',
                'TipoCursoId' => '1',
                'TipoEnfoqueId' => '1',
                'CursoTemario' => 'Técnicas de trazo, sombreado, dibujo de objetos y rostros simples.'
            ],
            
            
                [
                    'CursoNombre' => 'Introducción a la Inteligencia Artificial',
                    'CursoDescr' => 'Explora los conceptos básicos de la inteligencia artificial y sus aplicaciones.',
                    'CursoSeleccionado' => 'si',
                    'CursoComentario' => 'Recomendado para quienes buscan entender cómo funciona la IA en el mundo actual.',
                    'CursoObjetivo' => 'Familiarizarse con algoritmos de IA y su potencial en diversas industrias.',
                    'ClasifAcionId' => '1',
                    'TipoCursoId' => '1',
                    'TipoEnfoqueId' => '1',
                    'CursoTemario' => 'Historia de la IA, algoritmos de aprendizaje automático, casos de uso.'
                ],
                [
                    'CursoNombre' => 'Gestión de Proyectos Efectiva',
                    'CursoDescr' => 'Aprende a planificar, ejecutar y controlar proyectos de manera eficiente.',
                    'CursoSeleccionado' => 'si',
                    'CursoComentario' => 'Ideal para profesionales que lideran equipos y desean mejorar la gestión de proyectos.',
                    'CursoObjetivo' => 'Dominar herramientas y técnicas para llevar proyectos al éxito.',
                    'ClasifAcionId' => '5',
                    'TipoCursoId' => '2',
                    'TipoEnfoqueId' => '1',
                    'CursoTemario' => 'Ciclo de vida del proyecto, definición de objetivos, asignación de recursos.'
                ],
                [
                    'CursoNombre' => 'Marketing en Redes Sociales',
                    'CursoDescr' => 'Aprende a utilizar plataformas de redes sociales para promocionar productos y servicios.',
                    'CursoSeleccionado' => 'si',
                    'CursoComentario' => 'Recomendado para quienes desean aprovechar el alcance de las redes sociales.',
                    'CursoObjetivo' => 'Crear estrategias de marketing efectivas en plataformas como Facebook e Instagram.',
                    'ClasifAcionId' => '3',
                    'TipoCursoId' => '1',
                    'TipoEnfoqueId' => '1',
                    'CursoTemario' => 'Creación de contenido, publicidad en redes sociales, análisis de métricas.'
                ],
                [
                    'CursoNombre' => 'Finanzas Personales',
                    'CursoDescr' => 'Aprende a administrar tu dinero, invertir y planificar para el futuro financiero.',
                    'CursoSeleccionado' => 'si',
                    'CursoComentario' => 'Recomendado para todas las personas que desean tomar el control de sus finanzas.',
                    'CursoObjetivo' => 'Desarrollar hábitos financieros saludables y tomar decisiones informadas.',
                    'ClasifAcionId' => '6',
                    'TipoCursoId' => '2',
                    'TipoEnfoqueId' => '1',
                    'CursoTemario' => 'Presupuesto personal, ahorro, inversión, planificación para la jubilación.'
                ],
                [
                    'CursoNombre' => 'Nutrición y Estilo de Vida Saludable',
                    'CursoDescr' => 'Descubre los principios de una alimentación balanceada y un estilo de vida saludable.',
                    'CursoSeleccionado' => 'si',
                    'CursoComentario' => 'Ideal para quienes desean mejorar su bienestar a través de hábitos alimenticios.',
                    'CursoObjetivo' => 'Comprender la importancia de la nutrición y cómo llevar un estilo de vida activo.',
                    'ClasifAcionId' => '7',
                    'TipoCursoId' => '2',
                    'TipoEnfoqueId' => '1',
                    'CursoTemario' => 'Pirámide alimenticia, macronutrientes, recetas saludables, rutinas de ejercicio.'
                ],
                [
                    'CursoNombre' => 'Psicología del Desarrollo',
                    'CursoDescr' => 'Explora los aspectos clave del desarrollo humano desde la infancia hasta la vejez.',
                    'CursoSeleccionado' => 'si',
                    'CursoComentario' => 'Recomendado para quienes buscan comprender cómo evoluciona la mente humana.',
                    'CursoObjetivo' => 'Aprender sobre teorías de desarrollo y cómo influyen en nuestras vidas.',
                    'ClasifAcionId' => '8',
                    'TipoCursoId' => '1',
                    'TipoEnfoqueId' => '1',
                    'CursoTemario' => 'Desarrollo cognitivo, social y emocional en diferentes etapas de la vida.'
                ],
                [
                    'CursoNombre' => 'Física para Curiosos',
                    'CursoDescr' => 'Descubre los principios fundamentales de la física y su aplicación en el mundo.',
                    'CursoSeleccionado' => 'si',
                    'CursoComentario' => 'Perfecto para aquellos que quieren aprender sobre la ciencia que gobierna nuestro entorno.',
                    'CursoObjetivo' => 'Comprender conceptos físicos y cómo se relacionan con la realidad.',
                    'ClasifAcionId' => '9',
                    'TipoCursoId' => '1',
                    'TipoEnfoqueId' => '1',
                    'CursoTemario' => 'Leyes del movimiento, energía, electricidad y magnetismo, óptica básica.'
                ],
                [
                    'CursoNombre' => 'Astronomía Introductoria',
                    'CursoDescr' => 'Explora el universo y aprende sobre planetas, estrellas, galaxias y más.',
                    'CursoSeleccionado' => 'si',
                    'CursoComentario' => 'Recomendado para aficionados a la ciencia que se maravillan con el cosmos.',
                    'CursoObjetivo' => 'Conocer los conceptos básicos de la astronomía y la exploración espacial.',
                    'ClasifAcionId' => '10',
                    'TipoCursoId' => '1',
                    'TipoEnfoqueId' => '1',
                    'CursoTemario' => 'Sistema solar, estrellas y constelaciones, fenómenos astronómicos.'
                ],
                [
                    'CursoNombre' => 'Historia del Arte',
                    'CursoDescr' => 'Descubre las obras maestras y movimientos artísticos a lo largo de la historia.',
                    'CursoSeleccionado' => 'si',
                    'CursoComentario' => 'Ideal para amantes del arte y la cultura que desean conocer su evolución.',
                    'CursoObjetivo' => 'Explorar la historia de la expresión artística y sus influencias.',
                    'ClasifAcionId' => '11',
                    'TipoCursoId' => '1',
                    'TipoEnfoqueId' => '1',
                    'CursoTemario' => 'Arte renacentista, barroco, impresionismo, arte contemporáneo.'
                ],
               
            
            
        

       
        ]);
    }
}
