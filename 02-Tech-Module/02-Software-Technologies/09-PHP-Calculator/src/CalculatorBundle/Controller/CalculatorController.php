<?php

namespace CalculatorBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use CalculatorBundle\Entity\Calculator;
use CalculatorBundle\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/", name="index")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function index(Request $request)
    {
        $calculator = new Calculator();

        $form = $this->createForm(CalculatorType::class, $calculator);

        $form->handleRequest($request);

        $result = 0;

        if ($form->isSubmitted() && $form->isValid()) {
            $leftOperand = $calculator->getLeftOperand();
            $rightOperand = $calculator->getRightOperand();
            $operator = $calculator->getOperator();


            switch ($operator) {
                case "+":
                    $result = $leftOperand + $rightOperand;
                    break;
                case "-":
                    $result = $leftOperand - $rightOperand;
                    break;
                case "*":
                    $result = $leftOperand * $rightOperand;
                    break;
                case "/":
                    if ($rightOperand == 0){
                        $result = "Infinity";
                    }else {
                        $result = $leftOperand / $rightOperand;
                    }
                    break;
                case "^":
                    $result = pow($leftOperand, $rightOperand);
                    break;
                case "1/x":
                    $result = 1 / $leftOperand;
                    break;
                case "n!":
                    $fact = 1;
                for ($i = 2; $i <= $leftOperand; $i++) {
                    $fact *= $i;
                }
                $result = $fact;
                break;
                case "sqrt":
                    $result = sqrt($leftOperand);
                    break;
            }
        }

        return $this->render('calculator/index.html.twig',
            ['result' => $result, 'calculator' => $calculator, 'form' => $form->createView()]);

    }
}
