<?php

namespace App\Models\ModelClass;

use DateTime;
use Illuminate\Support\Facades\Hash;

class UserModel
{
    private int $id;
    private string $username;
    private string $name;
    private ?string $bio;
    private ?string $website;
    private string $profile_picture;
    private string $email;
    private string $phone;
    private ?string $gender;
    private ?DateTime $birthday;
    private string $password;
    private bool $isPublic = false;
    private DateTime $created_at;
    private ?DateTime $updated_at;
    private ?DateTime $deleted_at;

    public function __construct(int $id, string $username, string $name, ?string $bio, ?string $website, string $profile_picture, string $email, string $phone, ?string $gender, ?DateTime $birthday, string $password, bool $isPublic, DateTime $created_at, ?DateTime $updated_at, ?DateTime $deleted_at)
    {
        $this->id = $id;
        $this->username = $username;
        $this->name = $name;
        $this->bio = $bio;
        $this->website = $website;
        $this->profile_picture = $profile_picture;
        $this->email = $email;
        $this->phone = $phone;
        $this->gender = $gender;
        $this->birthday = $birthday;
        $this->password = $password;
        $this->isPublic = $isPublic;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;
    }

    /* getter and setter */
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): UserModel
    {
        $this->id = $id;
        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): UserModel
    {
        $this->username = $username;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): UserModel
    {
        $this->name = $name;
        return $this;
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function setBio(string $bio): UserModel
    {
        $this->bio = $bio;
        return $this;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function setWebsite(string $website): UserModel
    {
        $this->website = $website;
        return $this;
    }

    public function getProfile_picture(): string
    {
        return $this->profile_picture;
    }

    public function setProfile_picture(string $profile_picture): UserModel
    {
        $this->profile_picture = $profile_picture;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): UserModel
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): UserModel
    {
        $this->phone = $phone;

        return $this;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender): UserModel
    {
        $this->gender = $gender;

        return $this;
    }

    public function getBirthday(): DateTime
    {
        return $this->birthday;
    }

    public function setBirthday(DateTime $birthday): UserModel
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): UserModel
    {
        $this->password = Hash::make($password);
        return $this;
    }

    public function getIsPublic()
    {
        return $this->isPublic;
    }

    public function setIsPublic(bool $isPublic): UserModel
    {
        $this->isPublic = $isPublic;
        return $this;
    }

    public function getCreated_at(): DateTime
    {
        return $this->created_at;
    }

    public function setCreated_at(DateTime $created_at): UserModel
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getUpdated_at(): DateTime
    {
        return $this->updated_at;
    }

    public function setUpdated_at(DateTime $updated_at): UserModel
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function getDeleted_at(): DateTime
    {
        return $this->deleted_at;
    }

    public function setDeleted_at(DateTime $deleted_at): UserModel
    {
        $this->deleted_at = $deleted_at;
        return $this;
    }
    /* end getter and setter*/
}
