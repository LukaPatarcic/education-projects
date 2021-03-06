<?php


namespace App\Controllers;
use App\Core\Controller;
use App\Models\AuctionModel;
use App\models\AuctionViewModel;
use App\Models\CategoryModel;
use App\Models\OfferModel;


class AuctionController extends Controller
{
    public function show($id){

        $auctionModel = new AuctionModel($this->getDatabaseConnection ());
        $auction = $auctionModel->getByID($id);
        if(!$auction)
        {
            header ('Location: /');
            exit();
        }

        $this->set('auction',$auction);

        $lastOfferPrice = $this->getLastOfferPrice ($id);

        if(!$lastOfferPrice)
        {
            $lastOfferPrice = $auction->starting_price;
        }

        $this->set('lastOfferPrice',$lastOfferPrice);

        $auctionViewModel = new AuctionViewModel($this->getDatabaseConnection ());
        $ipAddress = filter_input (INPUT_SERVER,'REMOTE_ADDR');
        $userAgent = filter_input (INPUT_SERVER,'HTTP_USER_AGENT');
        $auctionViewModel->add([

            'auction_id' => $id,
            'ip_address'  => $ipAddress,
            'user_agent' => $userAgent

        ]);


    }

    private function getLastOfferPrice($auctionID)
    {
        $offerModel = new OfferModel($this->getDatabaseConnection ());
        $offers = $offerModel->getAllByAuctionID ($auctionID);
        $lastPrice = 0;
        foreach ($offers as $offer)
        {
            if($lastPrice < $offer->price)
            {
                $lastPrice = $offer->price;
            }
        }
        return $lastPrice;

    }


}