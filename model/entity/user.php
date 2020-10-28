<?php
require_once "model/entity/entity.php";

// Classe représetant les utilisateurs stockés en base de donnéesclass User extends Entity {
class User extends Entity {

        protected string $lastname;
        protected string $firstname;
        protected string $city_code;
        protected string $city;
        protected string $adress;
        protected string $phone;
        protected string $email;
        protected int $subscriber_number;

        public function setLastname(string $lastname) {
            $this->lastname = htmlspecialchars($lastname);
        }
        public function getLastname() {
            return $this->lastname;
        }

        public function setFirstname(string $firstname) {
            $this->firstname = htmlspecialchars($firstname);
        }
        public function getFirstname() {
            return $this->firstname;
        }

        public function setCity_code(int $city_code) {
            $this->city_code = htmlspecialchars($city_code);
        }
        public function getCity_code() {
            return $this->city_code;
        }

        public function setCity(string $city) {
            $this->city = htmlspecialchars($city);
        }
        public function getCity() {
            return $this->city;
        }

        public function setAdress(string $adress) {
            $this->adress = htmlspecialchars($adress);
        }
        public function getAdress() {
            return $this->adress;
        }

        public function setPhone(string $phone) {
            $this->phone = htmlspecialchars($phone);
        }
        public function getPhone() {
            return $this->phone;
        }

        public function setEmail(string $email) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this->email = $email;
                return $this;
            }
            throw new Exception("Format d'email incorrect");
        }

        public function getEmail() {
            return $this->email;
        }

        public function setSubscriber_number(string $subscriber_number) {
            $this->subscriber_number = $subscriber_number;
        }
        public function getSubscriber_number() {
            return $this->subscriber_number;
        }

        public function __construct($data) {
            $this->hydrate($data);
        }
}