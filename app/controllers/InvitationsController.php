<?php

use Arc\Validation\InvitationForm;
use Arc\Invitations\Invitation;
use Laracasts\Commander\CommandBus;

class InvitationsController extends \BaseController {

    private $invitationForm;
    private $commandBus;
    public function __construct(CommandBus $commandBus, InvitationForm $invitationForm)
    {
        $this->invitationForm = $invitationForm;
        $this->commandBus = $commandBus;
    }

    /**
     * Show the form for creating a new invitation.
     * GET /invitations/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('invitations.create');
    }

    /**
     * Store a newly created invitation in storage.
     * POST /invitations
     *
     * @return Response
     */
    public function store()
    {
        $this->invitationForm->validate(Input::all());
        $inviteCode = $this->getInvitationCode();
        $email = Input::get('email');
        if(Invitation::where('email', '=', $email)->count() > 0){
            $invitation = Invitation::where('email', '=', $email)->first();
        } else{
            $invitation = new Invitation;
        }
        $invitation->email = $email;
        $invitation->invitation_code = $inviteCode;
        $invitation->user_id = Auth::id();
        $invitation->save();
        return Redirect::back()->with(['message' => 'Invitation Sent to ' . $email]);
    }

    protected function getInvitationCode()
    {
        $length = 10;
        $inviteCode = '';
        $characters = "123456789";
        for ($p = 0; $p < $length; $p++) {
            $inviteCode .= substr($characters, mt_rand(0, strlen($characters)), 1);
        }
        $exists = Invitation::where('invitation_code', '=', $inviteCode)->count() > 0 ? TRUE:FALSE;
        if($exists){
            return $this->getInvitationCode();
        } else{
            return $inviteCode;
        }
    }

    /**
     * Remove the specified invitation from storage.
     * DELETE /invitations/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}