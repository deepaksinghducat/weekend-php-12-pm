// Employee 

// name
// email 
// designation 

// software enggg

// class Employee {
//     name = "deepak";
//     designation = "software enggg";

//     constructor(name, designation)  {
//         this.name = name;
//         this.designation = designation;
//     }

//     details = () => {
//         return this.name + " " + this.designation;
//     }
// }

// const employee = new Employee("deepak", "software engg");

// const employee2 = new Employee("navin", "software engg");

// console.log(employee2.name);

// static
// class Employee {
//     static name = "deepak";

//     static details = () => {
//         return this.name;
//     }
// }

// console.log(Employee.details());

// inheritance

class Car {
    #model = "2023"
    brand = "TATA"
    name = "Tiago"

    details() {
        return this.#model + " " + this.brand + " " + this.name;
    }
}

class Tata extends Car {
    // model = "2024"

    // details() {
    //     return this.#model + " " + this.brand + " " + this.name;
    // }
}

const tata = new Tata();

console.log(tata.details());