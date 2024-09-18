<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customers;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Customers::class; 

    public function definition(): array
    {
        return [
            'cus_name'=> fake()->company() ,
            'cus_name_register_th'=> fake()->company() ,
            'cus_name_register_en'=> fake()->company() ,
            'cus_address_th'=> fake()->address() ,
            'cus_address_en'=> fake()->address() ,
            'cus_email'=> fake()->email() ,
            'cus_telephone'=> fake()->phoneNumber() ,
            'cus_website'=> fake()->url() ,
            'cus_fax'=> fake()->phoneNumber() ,
            'contact_name'=> fake()->name() ,
            'contact_nickname'=> fake()->name() ,
            'contact_birthday'=> fake()->date() ,
            'contact_position'=> fake()->name() ,
            'contact_email'=> fake()->unique()->email() ,
            'contact_mobile'=> fake()->phoneNumber() ,
            'contact_telephone'=> fake()->phoneNumber() ,
            'contact_line'=> fake()->url() ,
            'contact_ig'=> fake()->url() ,
            'contact_facebook'=> fake()->url() ,
            'cby'=> fake()->name() ,
            'uby'=> fake()->name() ,
        ];
    }
}
