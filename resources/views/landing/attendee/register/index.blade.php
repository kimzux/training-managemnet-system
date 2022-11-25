<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@100;700&family=Montserrat:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/form.css">
    <title>fanisiprogram-Training</title>
</head>

<body>
@include('sweetalert::alert')

    <section class="form">
        
        <form action="{{route('attendee.register')}}" class="register-form" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-header">
                <div class="color-orange"></div>
                <div class="content">
                    <h2 class="form-h1">FANISI PROGRAM APPLICATION FORM</h2>
                    <span class="content1">"We nurture the growth of mid-level professionals and entrepreneurs”</span>
                    <span class="content2">
                        Our program offers leadership development skills tailored for mid-managers.
                        This highly-program focuses on the development of personal and group
                        leadership skills and knowledge relevant to successful career growth.
                    </span>
                </div>
                <hr>
            </div>

            <div class="form-group">
                <div class="form-field">
                @error('name')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="name" class="label">Name<span class="star">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp"
                        placeholder="Your answer" name="name" required>
                   
                </div>

                <div class="form-field">
                @error('email')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="email" class="label">Email address<span class="star">*</span></label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Your answer" name="email" required>
                        
                </div>
                <div class="form-field">
                @error('age')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="age" class="label">Age<span class="star">*</span></label>
                    <input type="number" class="form-control" id="exampleInputAge" aria-describedby="ageHelp"
                        placeholder="Your answer" name="age" required>
                       
                </div>
                <div class="form-field">
                @error('occupation')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="position" class="label">Position<span class="star">*</span></label>
                    <input type="text" class="form-control" id="exampleInputposition" aria-describedby="positionHelp"
                        placeholder="Your answer" name="occupation" required>
                        
                </div>
                <div class="form-field">
                @error('company')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="company" class="label">Company<span class="star">*</span></label>
                    <input type="text" class="form-control" id="exampleInputcompany" aria-describedby="companyHelp"
                        placeholder="Your answer" name="company" required>
                       
                </div>
                <div class="form-field">
                @error('phone_number')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="phone_number" class="label">Phone number<span class="star">*</span></label>
                    <input type="tel" class="form-control" id="exampleInputphone" aria-describedby="phoneHelp"
                        placeholder="Your answer" name="phone_number" required>
                       
                </div>
                <div class="form-field">
                @error('file')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                      <label for="phone_number" class="label">Upload Resume<span class="star">*</span></label>
                <input type="file" class="form-control" id="exampleInputphone" aria-describedby="phoneHelp"
                   name="resume"     placeholder="Your answer" required>
                </div>
                <div class="form-field">
                @error('resume')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                      
                    <label for="resume" class="label">Choose Cohort<span class="star">*</span></label>
                    <select class="form-control" id="exampleInputphone" name="train_name" aria-describedby="phoneHelp" required>
                    <option value="">Select Here</option>
                      @foreach($training as $trainings)
                          <option value="{{ $trainings->id}}">{{ $trainings->train_name}}</option>
                                  @endforeach
                        </select>
                </div>
                <div class="form-field">
                @error('team_status')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="checkbox" class="label">Are you managing a team ?<span class="star">*</span></label>
                    <div class="container-check">
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="node" id="exampleInputphone" aria-describedby="phoneHelp"
                                onclick="check(this);" value="Yes" name="team_status">
                            <label class="form-check-label" for="inlineRadio2">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="node" id="exampleInputphone" aria-describedby="phoneHelp"
                                onclick="check(this);" name="team_status" value="No">
                            <label class="form-check-label" for="inlineRadio2" >No</label>
                        </div>
                    </div>
                  
                </div>
                <div class="form-field">
                @error('info_before')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="company" class="label">How did you find out about the training ?
                        <span class="star">*</span></label>
                    <textarea class="form-control" id="exampleInputcompany" aria-describedby="companyHelp"
                        placeholder="Your answer" name="info_before" required></textarea>
                      
                </div>
                <div class="form-field">
                @error('response_description')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="company" class="label">Describe your response ?
                        <span class="star">*</span></label>
                    <textarea class="form-control" id="exampleInputcompany" aria-describedby="companyHelp"
                        placeholder="Your answer" name="response_description" required></textarea>
                       
                </div>
                <div class="form-field">
                @error('info_after')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="company" class="label">How will the training help you /what are you aspiring to achieve
                        by attending this training ?
                        <span class="star">*</span></label>
                    <textarea class="form-control" id="exampleInputcompany" aria-describedby="companyHelp"
                        placeholder="Your answer" name="info_after" required></textarea>
                       
                </div>
                <div class="form-field">
                @error('time')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="checkbox" class="label">What time suits you for the class ?<span
                            class="star">*</span></label>
                    <div class="container-check">
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="nodetime" id="exampleInputphone" aria-describedby="phoneHelp"
                                onclick="checkTime(this);" value="Evening 5:00 - 8:00pm" name="time">
                            <label class="form-check-label" for="inlineRadio2">Evening 5:00 - 8:00pm</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="nodetime" id="exampleInputphone" aria-describedby="phoneHelp"
                                onclick="checkTime(this);" name="time" value="Saturday 9:00 -
                                12:00pm">
                            <label class="form-check-label" for="inlineRadio2" >Saturday 9:00 -
                                12:00pm</label>
                        </div>
                    </div>
                   
                </div>
                <div class="form-field">
                @error('learn_mode')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="checkbox" class="label">What mode of learning do you prefer?
                        <span class="star">*</span></label>
                    <div class="container-check">
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="nodeMe" id="exampleInputphone" aria-describedby="phoneHelp"
                                onclick="checkMe(this);" value="virtual" name="learn_mode">
                            <label class="form-check-label" for="inlineRadio2">Virtual</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input type="checkbox" class="nodeMe" id="exampleInputphone" aria-describedby="phoneHelp"
                                onclick="checkMe(this);" value="physical" name="learn_mode">
                            <label class="form-check-label" for="inlineRadio2">Physical</label>
                          
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="btn-submit">
                <button type="submit" name="submit" class="btn btn-primary" autocomplete="off">Submit</button>
            </div>
       
        </form>
    </section>
    <script src="/assets/form.js"></script>
</body>

</html>