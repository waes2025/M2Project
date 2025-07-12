<?php

$contacts = [];

function addContact(array &$contacts, string $name, string $email, $phone):void
{
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];

    //array_push($contacts, ['name' => $name, 'email' => $email, 'phone' => $phone]);
}

function viewContacts(array $contacts):void
{
    if(empty($contacts)){
        echo 'No Contacts Available. \n';
    }else{
        foreach($contacts as $contact){
            echo "
                Name: {$contact['name']},
                Email: {$contact['email']},
                Phone: {$contact['phone']}\n,
        ";
        }
    }
}

while(true){
    echo "\nContact Management App: \n";
    echo "1. Add Contact\n2. View Contact\n3. Exit\n";
    
    $choice = (int)readline("Choice an option: ");

    if($choice === 1){
        $name = readline("Enter your name: ");
        $email = readline("Enter your email: ");
        $phone = readline("Enter your phone: ");
        
        addContact($contacts, $name, $email, $phone);

        echo "$name name added to contacts . \n";
        echo "$email added to contacts . \n";
        echo "$phone added to contacts . \n";
    }elseif($choice === 2){
        viewContacts($contacts);
    }elseif($choice === 3){
        echo "Exiting...\n";
        break;
    }else{
        echo "Invalid choice. Please try again. \n";
    }
}