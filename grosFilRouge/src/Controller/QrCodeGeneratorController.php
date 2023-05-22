<?php
 
namespace App\Controller;
 
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 
class QrCodeGeneratorController extends AbstractController
{
    #[Route('/qr-codes/{id}', name: 'app_qr_codes')]
    public function index($id): Response
    {
        $writer = new PngWriter();
        $qrCode = QrCode::create($this->generateUrl('app_presence_validation', ['id' => $id], UrlGeneratorInterface::ABSOLUTE_URL))
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(120)
            ->setMargin(0)
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));
       
 
        $qrCodes = [];

        $qrCodes['simple'] = $writer->write(
                                $qrCode,
                                null
                            )->getDataUri();
 
        
        return $this->render('qr_code_generator/index.html.twig', $qrCodes);
    }
}