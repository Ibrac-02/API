import './App.css'
export default function Register(){
    return(
        <>
        <form action="" method="post">
            <h4>FILL IN THE DETAILS</h4>
            <div>
                <label htmlFor="studentid">Student ID</label>
                <input type="text" />
            </div>
            <div>
                <label htmlFor="level">Level</label>
                <input type="number" />
            </div>
            <div>
                <label htmlFor="course code">Course Code</label>
                <input type="text" />
            </div>
            <div>
                <label htmlFor="course name">Course Name</label>
                <input type="text" />
            </div>
        </form>
        </>
    )
}