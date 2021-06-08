<?php

namespace App\Models\BuilderClass;

use DateTime;
use Illuminate\Support\Facades\Date;
use App\Models\ModelClass\UserModel;
use App\Service\DateTimeHelper;
use App\Service\HelperClass;
use DateTimeZone;
use Illuminate\Support\Facades\Hash;

class UserBuilder
{
    private int $id = 0;
    private string $username = "";
    private string $name = "";
    private ?string $bio = null;
    private ?string $website = null;
    private string $profile_picture = DEFAULT_PROFILE_PICTURE;
    private string $email = "";
    private string $phone = "";
    private ?string $gender = null;
    private ?DateTime $birthday = null;
    private string $password = "";
    private bool $isPublic = false;
    private ?DateTime $created_at;
    private ?DateTime $updated_at = null;
    private ?DateTime $deleted_at = null;

    /* getter and setter */
    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function setUsername(string $username)
    {
        $this->username = $username;
        return $this;
    }

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    public function setBio(string $bio)
    {
        $this->bio = $bio;
        return $this;
    }

    public function setWebsite(string $website)
    {
        $this->website = $website;
        return $this;
    }

    public function setProfile_picture(string $profile_picture)
    {
        $this->profile_picture = $profile_picture;
        return $this;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    public function setPhone(string $phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function setGender(string $gender)
    {
        $this->gender = $gender;

        return $this;
    }

    public function setBirthday(DateTime $birthday)
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function setPassword(string $password)
    {
        $this->password = Hash::make($password);
        return $this;
    }

    public function setIsPublic(bool $isPublic)
    {
        $this->isPublic = $isPublic;
        return $this;
    }

    public function setCreated_at(DateTime $created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function setUpdated_at(DateTime $updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function setDeleted_at(DateTime $deleted_at)
    {
        $this->deleted_at = $deleted_at;
        return $this;
    }

    public function build(): UserModel
    {
        $this->setCreated_at(DateTimeHelper::current_timestamp());
        return new UserModel(
            $this->id,
            $this->username,
            $this->name,
            $this->bio,
            $this->website,
            $this->profile_picture,
            $this->email,
            $this->phone,
            $this->gender,
            $this->birthday,
            $this->password,
            $this->isPublic,
            $this->created_at,
            $this->updated_at,
            $this->deleted_at
        );
    }
    /* end getter and setter*/
}
