<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = [
            'header' => [
                'title' => 'Nombre del Blog',
                'description' => [
                    'line1' => 'Frase de ejemplo 1',
                    'line2' => 'Frase de ejemplo 2',
                ],
                'background_image' => 'img/banner.webp',
            ],
            'extra' => [
                'linea1' => '',
                'linea2' => ''
            ],
            'propiedades' => $this->infoPropiedades(),
            'vendedores' => $this->infoVendedores(),
            'globos' => [
                ['info' => 'Toda la información que hay en la pagina es de ejemplo.'],
                ['info' => 'Todos los componentes pueden ser ajustados según preferencia del cliente.'],
                ['info' => 'La cantidad y disposición de los elementos es completamente configurable.'],
                ['info' => 'Imagenes, textos y colores quedan a criterio del cliente.'],
                ['info' => 'La cantidad de paginas o links tambien queda al gusto y necesidades.'],
            ],
        ];

        return view('pages.index', ['data' => $data]);
    }

    public function infoPropiedades()
    {
        $data = [
            [
                'id' => 1,
                'slug' => 'anuncio1',
                'titulo' => 'Casa Moderna en Ciudad de México',
                'precio' => 250000,
                'descripcion' => 'Casa moderna en zona céntrica, cerca de parques y colegios.',
                'descripcion_larga' => 'Esta casa moderna ofrece un diseño contemporáneo que combina estética y funcionalidad. Con amplias habitaciones llenas de luz natural, cuenta con una cocina equipada con electrodomésticos de última generación y una sala de estar perfecta para reuniones familiares. Además, está ubicada en una zona céntrica de Ciudad de México, lo que permite un fácil acceso a escuelas, parques y servicios esenciales, convirtiéndola en una opción ideal para familias que buscan comodidad y conveniencia.',
                'habitaciones' => 3,
                'baños' => 2,
                'estacionamientos' => 1,
                'superficie' => '120 m²',
                'tipo' => 'Casa',
                'ubicacion' => 'Ciudad de México, MX',
                'imagen' => '/img/anuncio1.jpg',
            ],
            [
                'id' => 2,
                'slug' => 'anuncio2',
                'titulo' => 'Departamento con Vista en Guadalajara',
                'precio' => 175000,
                'descripcion' => 'Departamento acogedor con vista a la ciudad, ideal para parejas.',
                'descripcion_larga' => 'Este encantador departamento no solo ofrece una vista impresionante de la ciudad, sino que también cuenta con un diseño interior acogedor que crea un ambiente cálido y hogareño. Perfecto para parejas, el departamento incluye una moderna cocina, un área de sala cómoda y un balcón donde se puede disfrutar de las vistas al atardecer. Su ubicación en Guadalajara garantiza un fácil acceso a cafeterías, restaurantes y tiendas, ideal para quienes buscan disfrutar de la vida urbana sin sacrificar la comodidad.',
                'habitaciones' => 2,
                'baños' => 1,
                'estacionamientos' => 1,
                'superficie' => '85 m²',
                'tipo' => 'Departamento',
                'ubicacion' => 'Guadalajara, MX',
                'imagen' => '/img/anuncio2.jpg',
            ],
            [
                'id' => 3,
                'slug' => 'anuncio3',
                'titulo' => 'Casa de Campo con Piscina en Monterrey',
                'precio' => 320000,
                'descripcion' => 'Amplia casa de campo con jardín y piscina, perfecta para familias grandes.',
                'descripcion_larga' => 'Ubicada en un entorno natural impresionante, esta casa de campo es el refugio perfecto para familias que buscan escapar del bullicio de la ciudad. Con un amplio jardín que rodea la propiedad, es ideal para actividades al aire libre y reuniones familiares. La casa cuenta con múltiples habitaciones, cada una diseñada para ofrecer comodidad y privacidad. Además, la piscina privada es el lugar ideal para relajarse y disfrutar del sol. Esta propiedad es una excelente opción para quienes valoran la tranquilidad y el espacio.',
                'habitaciones' => 4,
                'baños' => 3,
                'estacionamientos' => 2,
                'superficie' => '200 m²',
                'tipo' => 'Casa de campo',
                'ubicacion' => 'Monterrey, MX',
                'imagen' => '/img/anuncio3.jpg',
            ],
            [
                'id' => 4,
                'slug' => 'anuncio4',
                'titulo' => 'Estudio en Zona Comercial de Querétaro',
                'precio' => 60000,
                'descripcion' => 'Estudio pequeño y funcional en zona comercial, ideal para estudiantes.',
                'descripcion_larga' => 'Este estudio compacto está diseñado para maximizar el espacio y la funcionalidad. Situado en el corazón de una vibrante zona comercial, es perfecto para estudiantes o jóvenes profesionales que buscan un lugar conveniente y accesible. La cocina está equipada con todos los electrodomésticos necesarios y el área de estar está optimizada para ofrecer comodidad. La cercanía a transporte público y servicios hace que este estudio sea una opción inmejorable para quienes buscan una vida activa y dinámica.',
                'habitaciones' => 1,
                'baños' => 1,
                'estacionamientos' => 0,
                'superficie' => '45 m²',
                'tipo' => 'Estudio',
                'ubicacion' => 'Querétaro, MX',
                'imagen' => '/img/anuncio4.jpg',
            ],
            [
                'id' => 5,
                'slug' => 'anuncio5',
                'titulo' => 'Casa Familiar con Jardín en Puebla',
                'precio' => 280000,
                'descripcion' => 'Casa espaciosa en un vecindario tranquilo, con amplio jardín y cochera para dos autos.',
                'descripcion_larga' => 'Esta hermosa casa familiar está ubicada en un vecindario tranquilo y seguro, ideal para quienes buscan un hogar donde criar a sus hijos. La propiedad cuenta con un amplio jardín, perfecto para actividades al aire libre, así como una cochera que puede acomodar dos autos. Las habitaciones son luminosas y espaciosas, ofreciendo un ambiente acogedor. Con cercanía a escuelas, parques y centros comerciales, es una opción ideal para familias que buscan comodidad y accesibilidad.',
                'habitaciones' => 3,
                'baños' => 2,
                'estacionamientos' => 2,
                'superficie' => '150 m²',
                'tipo' => 'Casa',
                'ubicacion' => 'Puebla, MX',
                'imagen' => '/img/anuncio5.jpg',
            ],
            [
                'id' => 6,
                'slug' => 'anuncio6',
                'titulo' => 'Departamento de Lujo en Cancún',
                'precio' => 450000,
                'descripcion' => 'Departamento con acabados de lujo, vista al mar, y acceso privado a la playa.',
                'descripcion_larga' => 'Este exclusivo departamento de lujo es un verdadero oasis frente al mar. Con acabados de alta calidad, amplias áreas sociales y una impresionante vista al océano, es ideal para quienes buscan vivir en el lujo. Disfruta de acceso privado a la playa, así como de una piscina compartida y áreas de recreación. El departamento cuenta con una moderna cocina, habitaciones cómodas y un ambiente que combina confort y elegancia. Perfecto para aquellos que desean una vida de estilo junto al mar.',
                'habitaciones' => 3,
                'baños' => 2,
                'estacionamientos' => 2,
                'superficie' => '180 m²',
                'tipo' => 'Departamento',
                'ubicacion' => 'Cancún, MX',
                'imagen' => '/img/anuncio6.jpg',
            ]
        ];

        return $data;
    }

    public function infoVendedores()
    {
        $data = [
            [
                'id' => 1,
                'nombre' => 'Juan',
                'apellido' => 'Pérez',
                'telefono' => '555-1234',
            ],
            [
                'id' => 2,
                'nombre' => 'Ana',
                'apellido' => 'Gómez',
                'telefono' => '555-5678',
            ],
            [
                'id' => 3,
                'nombre' => 'Luis',
                'apellido' => 'Rodríguez',
                'telefono' => '555-9876',
            ],
        ];

        return $data;
    }
}
