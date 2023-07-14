<?php

namespace App\Helpers;

use App\Repository\ProfileRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\RequestStack;

class LogicHelper
{
    private ProfileRepository $profileRepository;
    private RequestStack $requestStack;
    private UserRepository $userRepository;

    public function __construct
    (
        ProfileRepository $profileRepository,
        RequestStack      $requestStack,
        UserRepository    $userRepository
    )
    {
        $this->profileRepository = $profileRepository;
        $this->requestStack = $requestStack;
        $this->userRepository = $userRepository;
    }

    public function isMovieLikedByCurrentUser(int $movieId, ?array $liked): bool
    {
        return in_array($movieId, array_column($liked, 'id'));
    }

    public function getCurrentProfileIdFromSession()
    {
        $profile = $this->requestStack->getSession()->get('filter');
        if ($profile !== null) return reset($profile);
        return 'profile not found';
    }

    public function getOtherProfiles($currentUser): array
    {
        $profile = $this->requestStack->getSession()->get('filter');
        $allProfiles = $this->profileRepository->findBy(array('subaccountOf' => $currentUser));
        $profileId = reset($profile);
        $currentProfile = $this->profileRepository->find($profileId);
        $profilePosition = array_keys($allProfiles, $currentProfile);
        unset($allProfiles[reset($profilePosition)]);
        return array_values($allProfiles);
    }

    //                  TRANSFORMING ARRAYS
    // for every movie element in movies, check if current profile liked the movie, then
    // transform movies -> add isLiked value to the array, push "true" or "false" accordingly
    // mandatory for my modal rendering

    public function transformArrayForModal($videos, $currentProfileId){
        $videoCount = count($videos);
        for ($video=0 ;$video < $videoCount; $video++){
            if ($videos[$video] !== null && $videos[$video]['likedBy'] !== null ) {
                $isVideoLikedByCurrentProfile = in_array($currentProfileId, array_column($videos[$video]['likedBy'], 'id'));
                $videos[$video]['isLiked'] = $isVideoLikedByCurrentProfile;
            }
        }
        return $videos;
    }
}