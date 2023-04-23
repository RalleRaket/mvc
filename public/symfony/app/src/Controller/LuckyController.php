<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    #[Route('/luckysdsddsds')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Slumpat nummer!: '.$number.'</body></html>'
        );
    }
    #[Route('/dsdsdsdsdsdsd')]
    public function number2(): Response
    {
        #$number = random_int(0, 100);

        return new Response(
            '<html>
            <h1>Om mig</h1>
            <body>
            <p>Jag heter Rasmus, 19 år gammal, och är från Stockholm.</p>
            <p>Jag pluggar webbprogrammering på bth.</p>
            <img src="mig.png" alt="mig">
            </body></html>'
        );
    }
    #[Route('/aboudsdsdt')]
    public function number3(): Response
    {
        #$number = random_int(0, 100);

        return new Response(
            '<html>
            <h1>Om mig</h1>
            <body>
            Jag heter Rasmus, 19 år gammal, och är från Stockholm.
            Jag pluggar webbprogrammering på bth. 
            </body></html>'
        );
    }

}
