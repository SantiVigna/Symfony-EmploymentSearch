<?php

namespace App\DataFixtures;

use App\Entity\Employment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EmploymentFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $employments = [
            [
                'employment' => "PHP Programmer with knowledge of Python",
                'state' => "0",
                'company'=> "Gaylord-Stamm",
                'country'=> "Andorra",
                'contact' => "+1 (260) 264-1297",
                'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826497/EmploymentSearch/jzn8nply7xyr3ux98axz.png",
            ],
            [
                'employment' => "HTML5 Web Developer",
                'state' => "1",
                'company'=> "Sawayn, Barton and Schiller",
                'country'=> "Estonia",
                'contact' => "620.887.1776",
                'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826523/EmploymentSearch/vzenxosqhrbkmuixuvpf.png",
            ],
            [
                'employment' => "PHP Vanilla Programmer",
                'state' => "1",
                'company'=> "Cole, Gleason and Russel",
                'country'=> "Argentina",
                'contact' => "559.212.8752",
                'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826497/EmploymentSearch/jzn8nply7xyr3ux98axz.png",
            ],
            [
                'employment' => "Python Developer",
                'state' => "1",
                'company'=> "Bruen, Beatty and Sanford",
                'country'=> "Albania",
                'contact' => "+1-930-663-0632",
                'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826299/EmploymentSearch/yyzfos3grdwa00v2wqrl.png",
            ],
            [
                'employment' => "Programmer C++ Software Developer",
                'state' => "1",
                'company'=> "Yundt PLC",
                'country'=> "Ecuador",
                'contact' => "845.434.1580",
                'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826666/EmploymentSearch/xga3eoqcmwbgkq2iknzf.png",
            ],
            [
                'employment' => "HTML5 Web Developer",
                'state' => "1",
                'company'=> "Dibbert-Wyman",
                'country'=> "Burkina Faso",
                'contact' => "(909) 422-0800",
                'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826523/EmploymentSearch/vzenxosqhrbkmuixuvpf.png",
            ],
            [
                'employment' => "Python Developer",
                'state' => "0",
                'company'=> "Veum Inc",
                'country'=> "Iraq",
                'contact' => "1-769-920-1255",
                'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826299/EmploymentSearch/yyzfos3grdwa00v2wqrl.png",
            ],
            [
                'employment' => "Programmer C++ Software Developer",
                'state' => "1",
                'company'=> "Connelly, Collins and Leannon",
                'country'=> "Bhutan",
                'contact' => "+14638916817",
                'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826666/EmploymentSearch/xga3eoqcmwbgkq2iknzf.png",
            ],
        ];
        foreach ($employments as $data) {
            $employment = new Employment();
            $employment->setEmployment($data['employment']);
            $employment->setState($data['state']);
            $employment->setCompany($data['company']);
            $employment->setCountry($data['country']);
            $employment->setContact($data['contact']);
            $employment->setImage($data['image']);

            $manager->persist($employment);
        }

        $manager->flush();
    }
}
