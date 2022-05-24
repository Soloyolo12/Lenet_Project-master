@extends('layouts.plantilla')

@section('content')


        <div>
            <div class="text-secondary">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                        <h1>
                            <a href="#" > <img src="{{asset('imagenes/Doc.png')}}" width="100" height="100"></a>
                            Documentación
                        </h1>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Selector de color</title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
        </head>
        <body>

            <div class="container">
                <div class="row align-items-start">
                    <div class="col-3">
                        <a href="#" > <img src="{{asset('imagenes/Topologia.png')}}" width="100" height="100"></a>
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#topologia">
                            Ver topología de Red
                        </button>
                    </div>
                    <div class="col-3">
                        <a href="#" > <img src="{{asset('imagenes/modelos.png')}}" width="100" height="100"></a>
                        <br>
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modelo">
                            Ver Modelos
                        </button>
                    </div>
                    <div class="col-3">
                        <a href="#" > <img src="{{asset('imagenes/dispositivo.png')}}" width="100" height="100"></a>
                        <br>
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#dispositivo">
                            Ver Dispositivos
                        </button>
                    </div>
                    <div class="col-3">
                        <a href="#" > <img src="{{asset('imagenes/Direccionamiento.png')}}" width="175" height="100"></a>
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#direccionami">
                            Ver Direccionamiento
                        </button>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="topologia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"  id="exampleModalLabel"> Tipos de Topologias </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="dark" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <h5>Punto a Punto</h5>
                            <div class=" col-10 offset-1">
                            <a href="#" > <img src="{{asset('imagenes/punto.png')}}" width="300" height="100"></a>

                            <p align="justify">
                                La topología más simple es un enlace permanente entre dos puntos finales (también conocida como point-to-point,
                                o abreviadamente, PtP). La topología punto a punto conmutado es el modelo básico de la telefonía convencional.
                                El valor de una red permanente de punto a punto la comunicación sin obstáculos entre los dos puntos finales.
                                El valor de una conexión punto-a-punto a demanda es proporcional al número de pares posibles de abonados y se
                                ha expresado como la ley de Metcalfe.
                            </p>

                        </div>
                        <h5>Estrella</h5>
                            <div class=" col-10 offset-1">
                            <a href="#" > <img src="{{asset('imagenes/Estrella.jpg')}}" width="300" height="200"></a>
                            <p align="justify">
                                Reduce la posibilidad de fallo de red conectando todos los nodos a un nodo central. Cuando se aplica a una red basada
                                en la topología estrella este concentrador central reenvía todas las transmisiones recibidas de cualquier nodo
                                periférico a todos los nodos periféricos de la red, algunas veces incluso al nodo que lo envió. Todos los nodos
                                periféricos se pueden comunicar con los demás transmitiendo o recibiendo del nodo central solamente. Un fallo en la
                                línea de conexión de cualquier nodo con el nodo central provocaría el aislamiento de ese nodo respecto a los demás,
                                pero el resto de sistemas permanecería intacto. El tipo de concentrador hub se utiliza en esta topología, aunque ya es
                                muy obsoleto; se suele usar comúnmente un switch.

                                La desventaja radica en la carga que recae sobre el nodo central. La cantidad de tráfico que deberá soportar es grande
                                y aumentará conforme vayamos agregando más nodos periféricos, lo que la hace poco recomendable para redes de gran tamaño.
                                Además, un fallo en el nodo central puede dejar inoperante a toda la red. Esto último conlleva también una mayor vulnerabilidad
                                de la red, en su conjunto, ante ataques.
                            </p>

                        </div>
                        <h5>Anillo</h5>
                            <div class=" col-10 offset-1">
                            <a href="#" > <img src="{{asset('imagenes/anillo.png')}}" width="300" height="200"></a>

                            <p align="justify">
                                Es un tipo de topología de red simple, en donde las estaciones de trabajo o computadoras, se encuentran conectadas entre
                                sí en forma de un anillo,
                                es decir, forman un círculo entre ellas. La información viaja en un solo sentido, por lo tanto, que si un nodo deja de
                                funcionar se cae la red o
                                deja de abastecer información a las demás computadoras que se encuentran dentro del anillo, por lo tanto, es poco eficaz.
                            </p>

                        </div>
                        <h5>Árbol</h5>
                            <div class=" col-10 offset-1">
                            <a href="#" > <img src="{{asset('imagenes/arbol.png')}}" width="300" height="200"></a>
                            <p align="justify">
                                Este tipo de topología de red es una de las más sencillas. Como su nombre lo indica, las conexiones entre los nodos
                                (terminales o computadoras)
                                están dispuestas en forma de árbol, con una punta y una base. Es similar a la topología de estrella y se basa directamente
                                en la topología de bus.
                                Si un nodo falla, no se presentan problemas entre los nodos subsiguientes. Cuenta con un cable principal
                                llamado Backbone, que lleva la comunicación
                                a todos los nodos de la red, compartiendo un mismo canal de comunicación.
                            </p>

                        </div>
                        <h5>Bus o Lineal</h5>
                            <div class=" col-10 offset-1">
                            <a href="#" > <img src="{{asset('imagenes/bus.png')}}" width="400" height="100"></a>

                            <p align="justify">
                                La topología de Bus se basa en un cable central, el cual lleva la información a todas las computadoras de la red, en forma de ramificaciones, de modo,
                                que la información viaja de manera secuencial hacia los nodos de la red. Su desventaja se basa en su distribución secuencial de datos, por lo que si se
                                interrumpe el cable central, la red queda inutilizada. En la actualidad es muy poco utilizada.
                            </p>

                        </div>
                        <h5>Malla</h5>
                            <div class=" col-10 offset-1">
                            <a href="#" > <img src="{{asset('imagenes/malla.png')}}" width="300" height="200"></a>
                            <p align="justify">
                                Esta topología de Malla es definida como topología de trama. Se trata de un arreglo de interconexión de nodos (terminales) entre sí, realizando la figura
                                de una malla o trama. Es una topología muy utilizada entre las redes WAN o de área amplia. Su importancia radica en que la información puede viajar en
                                diferentes caminos, de manera que si llegara a fallar un nodo, se puede seguir intercambiando información sin inconveniente alguno entre los nodos..
                            </p>

                        </div>
                        <h5>Hibrida o Mixta</h5>
                            <div class=" col-10 offset-1">
                            <a href="#" > <img src="{{asset('imagenes/mixta.png')}}" width="300" height="200"></a>

                            <p align="justify">
                                Como su nombre lo indica, es una combinación de dos o más topologías de red diferentes, para adaptar la red a las necesidades del cliente. De este modo,
                                podemos combinar las topologías que deseemos, obteniendo infinitas variedades, las cuales, deben ajustarse a la estructura física del lugar en donde estará
                                la red y los equipos que estarán conectados en dicha red.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal2 -->
            <div class="modal fade" id="modelo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"  id="exampleModalLabel"> Modelo OSI y TCP/IP </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <h5>Modelo OSI</h5>
                        <div class=" col-10 offset-1">
                            <a href="#" > <img src="{{asset('imagenes/osi.png')}}" width="400" height="500"></a>

                            <p align="justify">
                                El modelo de interconexión de sistemas abiertos (OSI, por sus siglas en inglés) es un modelo conceptual,
                                creado por la Organización Internacional de Normalización (ISO), que permite que diversos sistemas de
                                comunicación se comuniquen usando protocolos estándar. En resumidas cuentas, el modelo OSI proporciona
                                a los diferentes sistemas informáticos un estándar para comunicarse entre sí.

                            </p>
                            <p align="justify">

                                El modelo OSI se puede entender como un lenguaje universal de comunicación entre sistemas de redes informáticas
                                que consiste en dividir un sistema de comunicación en siete capas abstractas, apiladas en vertical.
                            </p>
                            <p align="justify">
                                Aunque la red moderna de Internet no se adhiere estrictamente al modelo OSI (más bien al conjunto de
                                protocolos de Internet más sencillo), este continúa siendo muy útil de cara a la resolución de diversos
                                problemas de red. Tanto si se trata de una persona que no puede acceder a Internet utilizando su portátil
                                o la interrupción de una página web que impide el acceso a miles de usuarios, el modelo OSI puede ayudar
                                a reducir el problema y aislar la fuente del mismo. Si el problema se puede reducir a una capa específica
                                del modelo, se puede evitar mucho trabajo innecesario.
                            </p>

                        </div>
                        <h5>TCP/IP</h5>
                        <div class=" col-10 offset-1">
                            <a href="#" > <img src="{{asset('imagenes/tcpip.png')}}" width="400" height="500"></a>
                            <p align="justify">
                                TCP/IP son las siglas de Transmission Control Protocol/Internet Protocol
                                (Protocolo de control de transmisión/Protocolo de Internet). TCP/IP es un conjunto de reglas
                                estandarizadas que permiten a los equipos comunicarse en una red como Internet.
                                Una interacción determinada puede darse entre dos sistemas informáticos o involucrar
                                cientos de sistemas. Sin embargo, como sucede al pasar una carta o un paquete de mano en mano,
                                cada transacción se produce entre solo dos equipos cada vez. Para que esto suceda, los dos equipos
                                deben saber, por adelantado, cómo se espera que se comuniquen.
                            </p>
                            <p align="justify">
                                TCP e IP son dos protocolos distintos para redes informáticas.

                            </p>
                            <p align="justify">
                               IP es la parte que obtiene la dirección a la que se envían los datos. TCP se encarga de la
                                entrega de los datos una vez hallada dicha dirección IP.

                            </p>
                            <p align="justify">

                                Es posible separarlos, pero lo cierto es que no tiene mucho sentido diferenciar entre TCP e IP.
                                Como se usan juntos tan habitualmente, “TCP/IP” y “modelo TCP/IP” son ya terminología reconocida.

                            </p>
                            <p align="justify">

                                Mírelo de esta forma: La dirección IP es como el número de teléfono que se asigna a su smartphone.
                                TCP es toda la tecnología que hace que el teléfono emita un timbre al recibir una llamada y que le
                                permite hablar con alguien al otro lado de la línea. Son cosas diferentes, pero tampoco tienen sentido la una sin la otra.
                            </p>

                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal3 -->
            <div class="modal fade" id="dispositivo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"  id="exampleModalLabel"> Dispositivos de Networking  </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <h5>Modelo OSI</h5>
                        <div class=" col-10 offset-1">
                            <a href="#" > <img src="{{asset('imagenes/osi.png')}}" width="400" height="500"></a>

                            <p align="justify">
                                El modelo de interconexión de sistemas abiertos (OSI, por sus siglas en inglés) es un modelo conceptual,
                                creado por la Organización Internacional de Normalización (ISO), que permite que diversos sistemas de
                                comunicación se comuniquen usando protocolos estándar. En resumidas cuentas, el modelo OSI proporciona
                                a los diferentes sistemas informáticos un estándar para comunicarse entre sí.

                            </p>
                            <p align="justify">

                                El modelo OSI se puede entender como un lenguaje universal de comunicación entre sistemas de redes informáticas
                                que consiste en dividir un sistema de comunicación en siete capas abstractas, apiladas en vertical.
                            </p>
                            <p align="justify">
                                Aunque la red moderna de Internet no se adhiere estrictamente al modelo OSI (más bien al conjunto de
                                protocolos de Internet más sencillo), este continúa siendo muy útil de cara a la resolución de diversos
                                problemas de red. Tanto si se trata de una persona que no puede acceder a Internet utilizando su portátil
                                o la interrupción de una página web que impide el acceso a miles de usuarios, el modelo OSI puede ayudar
                                a reducir el problema y aislar la fuente del mismo. Si el problema se puede reducir a una capa específica
                                del modelo, se puede evitar mucho trabajo innecesario.
                            </p>

                        </div>
                        <h5>TCP/IP</h5>
                        <div class=" col-10 offset-1">
                            <a href="#" > <img src="{{asset('imagenes/tcpip.png')}}" width="400" height="500"></a>
                            <p align="justify">
                                TCP/IP son las siglas de Transmission Control Protocol/Internet Protocol
                                (Protocolo de control de transmisión/Protocolo de Internet). TCP/IP es un conjunto de reglas
                                estandarizadas que permiten a los equipos comunicarse en una red como Internet.
                                Una interacción determinada puede darse entre dos sistemas informáticos o involucrar
                                cientos de sistemas. Sin embargo, como sucede al pasar una carta o un paquete de mano en mano,
                                cada transacción se produce entre solo dos equipos cada vez. Para que esto suceda, los dos equipos
                                deben saber, por adelantado, cómo se espera que se comuniquen.
                            </p>
                            <p align="justify">
                                TCP e IP son dos protocolos distintos para redes informáticas.

                            </p>
                            <p align="justify">
                                IP es la parte que obtiene la dirección a la que se envían los datos. TCP se encarga de la
                                entrega de los datos una vez hallada dicha dirección IP.

                            </p>
                            <p align="justify">

                                Es posible separarlos, pero lo cierto es que no tiene mucho sentido diferenciar entre TCP e IP.
                                Como se usan juntos tan habitualmente, “TCP/IP” y “modelo TCP/IP” son ya terminología reconocida.

                            </p>
                            <p align="justify">

                                Mírelo de esta forma: La dirección IP es como el número de teléfono que se asigna a su smartphone.
                                TCP es toda la tecnología que hace que el teléfono emita un timbre al recibir una llamada y que le
                                permite hablar con alguien al otro lado de la línea. Son cosas diferentes, pero tampoco tienen sentido la una sin la otra.
                            </p>

                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal4 -->
            <div class="modal fade" id="direccionami" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"  id="exampleModalLabel"> IPV4 y IPV6 </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <h5>Modelo OSI</h5>
                        <div class=" col-10 offset-1">
                            <a href="#" > <img src="{{asset('imagenes/osi.png')}}" width="400" height="500"></a>

                            <p align="justify">
                                El modelo de interconexión de sistemas abiertos (OSI, por sus siglas en inglés) es un modelo conceptual,
                                creado por la Organización Internacional de Normalización (ISO), que permite que diversos sistemas de
                                comunicación se comuniquen usando protocolos estándar. En resumidas cuentas, el modelo OSI proporciona
                                a los diferentes sistemas informáticos un estándar para comunicarse entre sí.

                            </p>
                            <p align="justify">

                                El modelo OSI se puede entender como un lenguaje universal de comunicación entre sistemas de redes informáticas
                                que consiste en dividir un sistema de comunicación en siete capas abstractas, apiladas en vertical.
                            </p>
                            <p align="justify">
                                Aunque la red moderna de Internet no se adhiere estrictamente al modelo OSI (más bien al conjunto de
                                protocolos de Internet más sencillo), este continúa siendo muy útil de cara a la resolución de diversos
                                problemas de red. Tanto si se trata de una persona que no puede acceder a Internet utilizando su portátil
                                o la interrupción de una página web que impide el acceso a miles de usuarios, el modelo OSI puede ayudar
                                a reducir el problema y aislar la fuente del mismo. Si el problema se puede reducir a una capa específica
                                del modelo, se puede evitar mucho trabajo innecesario.
                            </p>

                        </div>
                        <h5>TCP/IP</h5>
                        <div class=" col-10 offset-1">
                            <a href="#" > <img src="{{asset('imagenes/tcpip.png')}}" width="400" height="500"></a>
                            <p align="justify">
                                TCP/IP son las siglas de Transmission Control Protocol/Internet Protocol
                                (Protocolo de control de transmisión/Protocolo de Internet). TCP/IP es un conjunto de reglas
                                estandarizadas que permiten a los equipos comunicarse en una red como Internet.
                                Una interacción determinada puede darse entre dos sistemas informáticos o involucrar
                                cientos de sistemas. Sin embargo, como sucede al pasar una carta o un paquete de mano en mano,
                                cada transacción se produce entre solo dos equipos cada vez. Para que esto suceda, los dos equipos
                                deben saber, por adelantado, cómo se espera que se comuniquen.
                            </p>
                            <p align="justify">
                                TCP e IP son dos protocolos distintos para redes informáticas.

                            </p>
                            <p align="justify">
                                IP es la parte que obtiene la dirección a la que se envían los datos. TCP se encarga de la
                                entrega de los datos una vez hallada dicha dirección IP.

                            </p>
                            <p align="justify">

                                Es posible separarlos, pero lo cierto es que no tiene mucho sentido diferenciar entre TCP e IP.
                                Como se usan juntos tan habitualmente, “TCP/IP” y “modelo TCP/IP” son ya terminología reconocida.

                            </p>
                            <p align="justify">

                                Mírelo de esta forma: La dirección IP es como el número de teléfono que se asigna a su smartphone.
                                TCP es toda la tecnología que hace que el teléfono emita un timbre al recibir una llamada y que le
                                permite hablar con alguien al otro lado de la línea. Son cosas diferentes, pero tampoco tienen sentido la una sin la otra.
                            </p>

                        </div>

                    </div>
                </div>
            </div>


        </body>


@endsection
