<?php

namespace Controllers;
use Models\Customers;
use Models\UserAccounts;
use Models\Addresses;
use Core\Validator;
use Core\Database;
use Ramsey\Uuid\Uuid;

require_once "../Core/validator.php";
require_once "../Core/Database.php";
require_once "../Models/UserAccounts.php";
require_once "../Models/Addresses.php";
require_once "../Models/Customers.php";
require_once __DIR__ . '/../../vendor/autoload.php';

class RegistrationCustomerController {
    public function register(): void{
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data = $_POST;

            $required = ['FirstName', 'LastName', 'EmailAddress', 'UserPassword', 'DateOfBirth', 'PostalCode', 'HouseNumber', 'StreetName', 'City', 'Country'];
            $validation = new Validator();
            if ($validation->isEmpty($data, $required)) {
                echo "Vul alle velden in.";
                return;
            }

            if (!$validation->isValidEmail($data['EmailAddress'])) {
                echo "Ongeldig e-mailadres.";
                return;
            }

            try {
                $db = Database::getConnection();
                $db->beginTransaction();

                $customerID = Uuid::uuid4()->toString();


                $address = new Addresses(
                $data['PostalCode'],
                $data['HouseNumber'],
                $data['StreetName'],
                $data['City'],
                $data['Country']
                );

                
                if(!$address->saveAddress()){
                    throw new \Exception("Fout bij het opslaan van Address");
                }

                $customer = new Customers(
                $customerID,
                $data['FirstName'],
                $data['LastName'],
                $data['DateOfBirth'],
                $data['PostalCode'],
                $data['HouseNumber']
                );

                if(!$customer->saveCustomer()){
                    throw new \Exception("Fout bij het opslaan van Customer");
                }

                $userAccount = new UserAccounts(
                $data['EmailAddress'],
                $data['UserPassword'],
                'Active',          // voorbeeld status
                'Customer',         // voorbeeld access rights
                date('Y-m-d'),      // registratie datum vandaag
                $data['PhoneNumber'] ?? '',
                1,
                null,
                $customerID
                );

                if (!$userAccount->saveUserAccount()){
                    throw new \Exception("Fout bij het opslaan van een UserAccount");
                }

                $db->commit();
            } catch (\Exception $e){
                $db = Database::getConnection();
                $db->rollback();
                echo "Registratie mislukt: " . $e->getMessage();
                exit;
            }

        }
    }
    
}