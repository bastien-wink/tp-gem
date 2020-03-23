<?php

namespace App\Controller;

use App\Entity\Order;
use App\Services\GemService;
use Faker;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @Route("/factures", name="order_list")
     */
    public function list()
    {
        //dump(GemService::GEM_PRICES);

        $orders = $this->generateRandomOrders(50);

        return $this->render('order/list.html.twig', [
            'orders' => $orders,
            'gem_prices' => GemService::GEM_PRICES,
        ]);
    }

    /**
     * Code de génération d'une facture
     * Ne pas modifier
     */
    private function generateRandomOrders($count): array
    {
        $randomOrders = [];
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < $count; $i++) {

            $order = new Order();
            $order->setDate($faker->dateTimeThisMonth('now'));
            $order->setCustomerFirstname($faker->firstName);
            $order->setCustomerLastname($faker->lastName);

            for ($y = 0; $y < rand(1, 3); $y++) {
                $randomGemName = $faker->randomKey(GemService::GEM_PRICES);
                $randomQuantity = $faker->numberBetween(1, 20);

                $order->addItemPurchased($randomGemName, $randomQuantity);
                $order->setTotal($order->getTotal() + GemService::GEM_PRICES[$randomGemName] * $randomQuantity);
            }
            $randomOrders[] = $order;
        }

        usort($randomOrders, function ($object1, $object2) {
            return $object1->getDate() < $object2->getDate();
        });

        return $randomOrders;
    }

}
