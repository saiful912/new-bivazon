<div>
    <div class="container-fluid h-100 message-container">
        <div class="row  h-100">
            <div class="col-md-4 col-xl-3 chat">
                <div class="card mb-sm-3 mb-md-0 contacts_card">
                    <div class="card-body contacts_body">
                        <ui class="contacts">
                            <li class="active">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img
                                            src="{{upload_url('shop/profile/'.$selectUser->image)}}"
                                            class="rounded-circle user_img">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>{{$selectUser->full_name}}</span>
                                        <p>{{$selectUser->full_name}} is online</p>
                                    </div>
                                </div>
                            </li>
                        </ui>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xl-8 chat">
                <div class="card">
                    <div class="card-header msg_head">
                        <div class="d-flex bd-highlight">
                            <div class="img_cont">
                                <img
                                    src="{{upload_url('shop/profile/'.$selectUser->image)}}"
                                    class="rounded-circle user_img">
                                <span class="online_icon"></span>
                            </div>
                            <div class="user_info">
                                <span>{{$selectUser->full_name}}</span>
                                <p>1767 Messages</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body msg_card_body">
                        @foreach($messages as $message)
                            <div class="d-flex {{$selectedUser->id === $message->from_id ? 'justify-content-start':'justify-content-end'}}  mb-4">
                                <div class="msg_cotainer_send">
                                    {{$message->text}}
                                    <span class="msg_time_send">{{$message->created_at->diffForHumans()}}</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="{{upload_url('shop/profile/'.$message->user->image)}}" alt=""
                                         class="rounded-circle user_img_msg">
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <form class="card-footer" wire:submit.prevent="sendMessage">
                        <div class="input-group">
                            <textarea id="scroll" wire:model.lazy="message" name="message" class="form-control type_msg"
                                      placeholder="Type your message..."></textarea>
                            <div class="input-group-append">
                                <button type="submit" style="outline: none;" class="input-group-text send_btn"><i
                                        class="bx bxs-send"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
